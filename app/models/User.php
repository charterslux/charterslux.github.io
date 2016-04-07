<?php
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Laracasts\Commander\Events\EventGenerator;
use Site\User\Events\UserRegistered;

/**
 * Class User
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	use EventGenerator;
	use SoftDeletingTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token', 'user_session', 'erp_id', 'type_id');
	/**
	 * @var array
	 */
	protected $guarded = array('id', 'erp_id', 'remember_token');

	/**
	 * @var array
	 */
	protected $dates = ['deleted_at', 'created_at', 'updated_at'];
	/**
	 * @var array
	 */
	protected $rules = array(
		'email' => 'sometimes|required|email|unique:users',
	);

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * @param $pass
	 *
	 * @return string
	 */
	public function getKohanaHash($pass)
	{
		return hash_hmac('sha256', $pass, getenv('KOHANA_HASH_KEY'));
	}

	/**
	 * @return Client
	 */
	public function client()
	{
		return $this->hasOne('Client');
	}

	/**
	 * return array
	 */
	public function count_orders()
	{
		$orders = ['active' => NULL, 'closed' => NULL];

		$_orders = Order::select(['id', 'status_id'])->where('user_id', $this->id)->get();

		foreach($_orders as $order)
		{
			if(in_array($order->status_id, [1,2,3]))
				$orders['active']++;

			if(in_array($order->status_id, [4,5]))
				$orders['closed']++;
		}

		return $orders;
	}

	public function cabinetLink()
	{
		/** @var Client $client */
		$client = $this->client;
		$client_fio = ($client) ? $client->name('if') : NULL;

		return ($client_fio) ? $client_fio : trans('chunks.menu.cabinet');
	}

	/**
	 * @param $value
	 */
	public function setPasswordAttribute($value)
	{
		if($value)
			$this->attributes['password'] = Hash::make($value);
	}

	/**
	 * @param $email
	 * @param $password
	 *
	 * @return static
	 */public static function register($email, $password, $client_data)
	{
		$user = new static(compact('email', 'password'));
		$user->save();

		$client = NULL;
		if($client_data)
		{
			$client = Client::create(['user_id' => $user->id]+$client_data);
		}

		$user->raise(new UserRegistered($user, $client));

		return $user;
	}
}
