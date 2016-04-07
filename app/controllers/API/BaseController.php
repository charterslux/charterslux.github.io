<?php namespace API;

use Controller;
use Event;
use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\MessageBag;
use Laracasts\Commander\CommanderTrait;

/**
 * Class BaseController
 * @package API
 */
class BaseController extends Controller {

	use CommanderTrait;

	/**
	 * @var int
	 */
	protected $statusCode = 200;

	/**
	 * @var string
	 */
	protected $redirectUrl;

	/**
	 * @var array
	 */
	protected $refreshData = [];

	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @param array $data
	 */
	public function setData($data)
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStatusCode()
	{
		return $this->statusCode;
	}

	/**
	 * @param mixed $statusCode
	 *
	 * @return $this
	 */
	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;

		return $this;
	}

	/**
	 *
	 */
	public function __construct()
	{
		$this->beforeFilter(function()
		{
			Event::fire('clockwork.controller.start');
		});

		$this->afterFilter(function()
		{
			Event::fire('clockwork.controller.end');
		});
	}

	/**
	 * @return mixed
	 */
	public function getRedirectUrl()
	{
		return $this->redirectUrl;
	}

	/**
	 * @param mixed $redirectUrl
	 */
	public function setRedirectUrl($redirectUrl)
	{
		$this->redirectUrl = $redirectUrl;

		return $this;
	}

	public function setRefreshData($array)
	{
		$this->refreshData = $array;

		return $this;
	}

	public function getRefreshData()
	{
		return $this->refreshData;
	}

	/**
	 * @param $message
	 */
	public function respondNotFound($message = 'Not found', $section = NULL)
	{
		return $this->setStatusCode(Response::HTTP_NOT_FOUND)->respondWithError($message, $section);
	}

	/**
	 * @param $message
	 */
	public function respondForbidden($message = 'Forbidden')
	{
		return $this->setStatusCode(Response::HTTP_FORBIDDEN)->respondWithError($message);
	}

	/**
	 * @param $message
	 */
	public function respondUnauthorized($message = 'Unauthorized')
	{
		return $this->setStatusCode(Response::HTTP_UNAUTHORIZED)->respondWithError($message);
	}

	/**
	 * @param $message
	 */
	public function respondInternalError($message = 'Internal Server Error')
	{
		return $this->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
	}

	public function respondWithBadRequest($message = 'Bad Request', $section = NULL)
	{
		return $this->setStatusCode(Response::HTTP_BAD_REQUEST)->respondWithError($message, $section);
	}

	/**
	 * @param $message
	 */
	public function respondWithError($message, $section = NULL)
	{
		return $this->respond([
			'message' => $this->getMessage('error', $message, $section)
		]);
	}
	/**
	 * @param $message
	 */
	public function respondWithSuccess($message)
	{
		return $this->respond([
			'message' => $this->getMessage('success', $message),
		]);
	}

	/**
	 * @param Paginator  $object
	 * @param            $data
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	protected function respondWithPagination(Paginator $object, $data, $pagination_view = FALSE)
	{
		$total_pages = ceil($object->getTotal() / $object->getPerPage());
		$next_page = ($object->getCurrentPage() == $object->getLastPage()) ? NULL : $object->getCurrentPage() + 1;
		$previous_page = ($object->getCurrentPage() == 1) ? NULL : $object->getCurrentPage() - 1;

		$paginator = [
			'pagination' => ($pagination_view)
				? $object->links()->render()
				: [
					'total_items'  => $object->getTotal(),
					'total_pages'  => $total_pages,
					'per_page'     => $object->getPerPage(),
					'current_page' => $object->getCurrentPage(),
					'previous_page' => $previous_page,
					'next_page'    => $next_page,
					'last_page'    => $object->getLastPage(),
				]
		];

		$data = array_merge($data, $paginator);

		return $this->respond($data);
	}

	/**
	 * @param       $message
	 * @param array $headers
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function respond($data, $headers = [])
	{
		$data += ['status' => $this->getStatusCode()];

		if($this->getRedirectUrl())
			$data += ['redirect' => $this->getRedirectUrl()];

		if($this->getRefreshData())
			$data += ['refresh' => $this->getRefreshData()];

		if($this->getData())
			$data += ['data' => $this->getData()];

		$headers += [
			'Access-Control-Allow-Origin' => '*',
			'Access-Control-Allow-Methods' => 'GET, POST'
		];

		return \Response::json($data, $this->getStatusCode(), $headers, JSON_UNESCAPED_UNICODE);
	}

	private function getMessage($type, $message, $section = NULL)
	{
		$messages = [];

		if(is_array($message))
		{
			foreach($message as $_section => $error)
			{
				if(is_string($_section))
					$section = $_section;

				$messages[] = $this->prepareMessage($type, $error, $section);
			}
		}
		elseif($message instanceof MessageBag)
		{
			foreach($message->toArray() as $_section => $_messages)
			{
				foreach($_messages as $_message)
					$messages[] = $this->prepareMessage($type, $_message, $_section);
			}
		}
		else
		{
			$messages[] = $this->prepareMessage($type, $message, $section);
		}

		return $messages;
	}

	private function prepareMessage($type, $message, $section)
	{
		return [
			'type'        => $type,
			'text'        => $message,
			'status_code' => $this->getStatusCode(),
			'section'     => $section,
		];
	}
}
