<?php namespace API;

use API\Transformers\OrderTransformer;
use Auth;
use I18n;
use Input;
use Order;
use Request;
use Session;
use Site\Order\CreateOrderCommand;
use Site\Order\SaveContactsToOrderCommand;
use Site\Order\SendOrderCommand;
use User;
use View;

/**
 * OrderController Ajax Controller
 *
 * @namespace API
 * @route     Route::get('/', 'OrderController@index');
 * @author    Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */
class OrderController extends BaseController
{

    /**
     * @var OrderTransformer
     */
    private $orderTransformer;

    /**
     * @param OrderTransformer $orderTransformer
     */
    function __construct(OrderTransformer $orderTransformer)
    {
        parent::__construct();
        $this->orderTransformer = $orderTransformer;
        $this->beforeFilter('api_auth',
            ['except' => ['saveOrder', 'postDeleteJet', 'saveOrderContactsModal', 'saveContactsToOrder']]
        );
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList()
    {
        $type = Request::segment(5);

        if ( ! $type) {
            $type = Request::segment(4);
        }

        if ($type == 'list') {
            $type = 'active';
        }

        $html_paging = (bool) Input::get('html-paging');

        $user = Auth::user();

        $_orders = Order::select('orders.*')
                        ->with('user',
                            'status',
                            'user.client',
                            'legs',
                            'legs.airport_from',
                            'legs.airport_to',
                            'jet_classes',
                            'jet_makers'
                        )
                        ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                        ->leftJoin('clients', 'clients.id', '=', 'orders.client_id')
                        ->leftJoin('order_statuses', 'order_statuses.id', '=', 'orders.status_id')
                        ->where(function ($q) use ($user, $type) {
                            $q->where('users.id', $user->id)->where('clients.id', $user->client->id);

                            if ($type == 'active') {
                                $q->whereIn('order_statuses.name', ['created', 'send', 'confirmed']);
                            } else {
                                $q->whereNotIn('order_statuses.name', ['created', 'send', 'confirmed']);
                            }
                        }
                        )
                        ->orderBy('id', 'DESC')
                        ->paginate(5);

        return $this->respondWithPagination($_orders,
            ['data' => $this->orderTransformer->transformCollection($_orders->getCollection())],
            $html_paging
        );
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveOrder()
    {
        $this->execute(CreateOrderCommand::class);

        $orderId = Session::get('orderId');

        $url = route('api.order.contacts.saveModal', ['orderId' => $orderId]);

        return $this->setData(compact('url'))->respondWithSuccess(trans('chunks.paragraphs.order_created'));
    }

    public function saveOrderContactsModal($orderId)
    {
        return View::make('modal-bodies.orderContacts', compact('orderId'));
    }

    public function saveContactsToOrder()
    {
        $this->execute(SaveContactsToOrderCommand::class);

        return $this->respondWithSuccess(trans('chunks.paragraphs.order_sent'));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function anySend()
    {
        $this->execute(SendOrderCommand::class);

        return $this->respondWithSuccess(trans('messages.order.send'));
    }

    /**
     * @param null $order_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getShow($order_id = null)
    {
        $user = Auth::user();

        $order_id = intval($order_id);

        if ( ! $order_id) {
            $order_id = intval(Input::get('order'));
        }

        if ( ! $order_id) {
            return Response::json(['error' => trans('messages.order.not_defined')]);
        }

        $_order = Order::with('user',
            'status',
            'user.client',
            'legs',
            'legs.airport_from',
            'legs.airport_to',
            'jet_classes',
            'jet_makers'
        )->where(function ($q) use ($user) {
            $q->where('user_id', $user->id)->where('client_id', $user->client->id);
        }
        )->findOrFail($order_id);

        $order = [
            'id'         => $_order->id,
            'legs'       => $_order->legs,
            'classes'    => $_order->jet_classes,
            'makers'     => $_order->jet_makers,
            'tails'      => $_order->tails,
            'status'     => trans('messages.order_status.' . $_order->status->name),
            'created_at' => $_order->created_at->toDateTimeString(),
            'updated_at' => $_order->updated_at->toDateTimeString(),
            'deleted_at' => ($_order->deleted_at) ? $_order->deleted_at->toDateTimeString() : null,
        ];

        return Response::json(['data' => $order]);
    }

    /**
     * @param $order_id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anySendUpdate($order_id)
    {
        $user_id = Auth::user()->id;
        $user    = User::findOrFail($user_id);
        $order   = Order::where('status_id', 1)->find(intval($order_id));

        if ( ! $order) {
            return $this->respondNotFound(trans('messages.order.not_found'));
        }

        if ($order->user_id AND $order->user_id != $user->id) {
            return $this->respondNotFound(trans('messages.order.not_owned'));
        }

        if ( ! $order->user_id) {
            $order->user_id   = $user->id;
            $order->client_id = $user->client->id;
            $order->save();
        }

        $order =
            Order::with('user', 'client', 'legs', 'legs.airport_from', 'legs.airport_to', 'jet_makers', 'jet_classes')
                 ->find(intval($order_id));

        $this->execute(SendOrderCommand::class, ['order_id' => $order->id]);

        return $this->setRedirectUrl(I18n::localizeURL('order/list/active'))
                    ->respondWithSuccess(trans('messages.order.send'));
    }

    public function anyDelete($order_id)
    {
        $user_id = Auth::user()->id;
        $user    = User::findOrFail($user_id);
        $order   = Order::where('status_id', 1)->where('user_id', $user_id)->find(intval($order_id));

        if ( ! $order) {
            return $this->respondNotFound(trans('messages.order.not_found'));
        }

        if ($order->user_id AND $order->user_id != $user->id) {
            return $this->respondNotFound(trans('messages.order.not_owned'));
        }

        $order->delete();

        return $this->setRedirectUrl(I18n::localizeURL('order/list/active'))
                    ->respondWithSuccess(trans('messages.order.deleted'));
    }

    public function postDeleteJet()
    {
        $orderId    = intval(Input::get('order_id'));
        $tailNumber = Input::get('tail_number');

        $order = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $user    = User::findOrFail($user_id);
            $order   = Order::where('status_id', 1)->where('user_id', $user->id)->find(intval($orderId));
        } else {
            $order = Order::where('status_id', 1)->whereNull('user_id')->find(intval($orderId));
        }

        if ( ! $order) {
            return $this->respondNotFound(trans('messages.order.not_found'));
        }

        if ($order->user_id AND $order->user_id != $user->id) {
            return $this->respondNotFound(trans('messages.order.not_owned'));
        }

        $tails = $order->tails;

        array_forget($tails, $tailNumber);

        $order->tails = $tails;

        $order->save();

        return $this->setRefreshData(['grid' => '#jets'])->respondWithSuccess(trans('messages.order.tail_deleted'));
    }
}
