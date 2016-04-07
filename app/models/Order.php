<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Laracasts\Commander\Events\EventGenerator;
use Site\Order\Events\OrderChangeStatusToSend;

class Order extends Eloquent
{

    public $timestamps = true;
    protected $table = 'orders';

    use SoftDeletingTrait;
    use EventGenerator;
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function legs()
    {
        return $this->hasMany('Leg');
    }

    public function airport_from()
    {
        return $this->belongsTo(Airport::class);
    }

    public function airport_to()
    {
        return $this->belongsTo(Airport::class);
    }

    public function status()
    {
        return $this->belongsTo('Order_Status', 'status_id');
    }

    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function getTailsAttribute($value)
    {
        if ($value) {
            $value = unserialize($value);
        }

        return $value;
    }

    public function setTailsAttribute($value)
    {
        $this->attributes['tails'] = serialize($value);
    }

    public function jet_classes()
    {
        return $this->belongsToMany('Jet_Class', 'orders_jet_classes', 'order_id', 'jet_class_id');
    }

    public function jet_makers()
    {
        return $this->belongsToMany('Jet_Maker', 'orders_jet_makers', 'order_id', 'jet_maker_id');
    }

    public function sendInERP()
    {
        $this->status_id = 2;
        $this->save();

        $this->raise(new OrderChangeStatusToSend($this));

        return $this;
    }

    public static function boot()
    {
        parent::boot();
        static::created(function ($order) {
            Session::flash('orderId', $order->id);
            Session::flash('message', 'Заявка сохранена');
        }
        );

        static::updated(function ($order) {
            Session::flash('orderId', $order->id);
            Session::flash('message', 'Заявка обновлена');
        }
        );

        static::deleted(function ($order) {
            Session::flash('orderId', $order->id);
            Session::flash('message', 'Заявка перенесена в архив');
        }
        );

        static::restored(function ($order) {
            Session::flash('orderId', $order->id);
            Session::flash('message', 'Заявка восстановлена');
        }
        );
    }
}