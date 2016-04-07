<?php namespace API;

use API\helpers\APITester;
use API\helpers\Factory;
use API_AuthFilter;
use Auth;
use Str;
use User;

/**
 * Class AuthTest
 *
 * @package API
 * @coversDefaultClass API\AuthController
 */
class AuthTest extends APITester {

	use Factory;

	/**
	 * Проверка шлюза /auth/login
	 *
	 * @covers ::anyLogin
	 */
	public function testLoginUser()
	{
		$auth_data = ['email' => 'first_user@email.com', 'password' => 'password'];

		$response = $this->getJsonWithSuccess('/api/auth/login', 'POST', $auth_data);

		$data = $response->data;

		$user = User::where('email', 'first_user@email.com')->first();

		$this->data_of_user($data, $user);
		$this->response_with_key($data, $user);

	}

	/**
	 * Проверка разлогинивания пользователя API
	 *
	 * @covers ::anyLogout
	 */
	public function testLogoutUser()
	{
		Auth::loginUsingId(1, TRUE);
		$auth_filter = new API_AuthFilter();
		$salt = Str::random(8);
		$token = $auth_filter->get_token(Auth::user()->id, $salt);

		$auth_data = ['user' => Auth::user()->id, 'token' => $token, 'salt' => $salt];

		$data = $this->getJsonWithSuccess('/api/auth/logout', 'GET', $auth_data);

		$this->assertObjectHasAttribute('redirect', $data);

		$this->success_message($data);
		$this->assertEquals(FALSE, Auth::check());
	}

	/**
	 * Проверка на успешную регистрацию
	 *
	 * @covers ::anyRegister
	 */
	public function testRegisterNewUser()
	{
		$new_user_email    = $this->fake->email;
		$new_user_password = Str::random(8);

		$auth_data = ['email' => $new_user_email, 'password' => $new_user_password];

		$response = $this->getJsonWithSuccess('/api/auth/register', 'POST', $auth_data);
		$data = $response->data;
		$user = User::where('email', $new_user_email)->first();

		$this->assertNotNull($user);
		$this->assertEquals(TRUE, $user->exists);

		$this->success_message($response);
		$this->data_of_user($data, $user);
		$this->response_with_key($data, $user);
	}

	/**
	 * Проверка регистрации уже имеющегося пользователя
	 *
	 * @covers ::anyRegister
	 */
	public function testRegisterUserWithNotUniqueEmail()
	{
		$bad_auth_data = ['email' => 'first_user@email.com'];

		$data = $this->getJsonWithError('/api/auth/register', 'POST', $bad_auth_data);

		$this->error_message($data->message);//, ['email', 'password']);
	}

	/**
	 * Проверка регистрации уже зарегистрированного пользователя
	 *
	 * @covers ::anyRegister
	 */
	public function testRegisterAlreadyLoggedInUser()
	{
		Auth::loginUsingId(1);
		$auth_data = ['email' => 'first_user@email.com', 'password' => 'password'];

		$data = $this->getJsonWithError('/api/auth/register', 'POST', $auth_data);

		$this->error_message($data->message);

		$this->assertObjectHasAttribute('redirect', $data);
	}

	/**
	 * Проверка на возможность логина
	 *
	 * @covers ::getLoggedin
	 */
	public function testLoggedInPositiveResult()
	{
		$user = User::with('client')->find(1);
		Auth::login($user);

		$auth_data = $this->get_auth_data($user);

		$data = $this->getJsonWithSuccess('/api/auth/loggedin', 'GET', $auth_data);

		$this->assertAttributeEquals(200, 'status', $data);
		$this->assertAttributeEquals(TRUE, 'data', $data);
	}

	/**
	 * Проверка на возможность логина
	 *
	 * @covers ::getLoggedin
	 */
	public function testLoggedInNegativeResult()
	{
		$auth_data = array(
			'user' => rand(),
			'token' => Str::random(60),
			'salt' => Str::random(8),
		);

		$data = $this->getJsonWithError('/api/auth/loggedin', 'GET', $auth_data);

		$this->assertEquals(FALSE, $data->data);
	}

	/**
	 * Проверка на то, возвращается ли id пользователя в ответе
	 *
	 * @param      $data
	 * @param User $user
	 */
	protected function data_of_user($data, User $user)
	{
		$this->assertAttributeEquals($user->id, 'user', $data);
	}

	/**
	 * Проверка на получение верного api_key
	 *
	 * @param $data
	 * @param $user
	 */
	protected function response_with_key($data, $user)
	{
		$this->assertAttributeNotEmpty('api_key', $data);
		$this->assertAttributeEquals($user->remember_token, 'api_key', $data);
	}

	/**
	 * Получение положительного сообщения
	 *
	 * @param $data
	 */
	protected function success_message($data)
	{
		$this->assertAttributeEquals(200, 'status', $data);
		$this->assertObjectHasAttribute('message', $data);
		$message = $data->message[0];
		$this->assertObjectHasAttributes($message, 'type', 'text');
		$this->assertAttributeEquals('success', 'type', $message);
	}

	/**
	 * Получение сообщения об ошибке
	 *
	 * @param array|object $message
	 * @param null|string  $section
	 */
	protected function error_message($message, $section = NULL)
	{
		if(is_array($message))
		{
			foreach($message as $message_obj)
				$this->error_message($message_obj, $section);
		}
		else
		{
			$this->assertNotEquals(200, $message->status_code);
			$this->assertObjectHasAttribute('type', $message);
			$this->assertObjectHasAttribute('text', $message);
			$this->assertAttributeEquals('error', 'type', $message);

//		if($section)
//			$this->error_message_with_section($message, $section);
		}
	}

	/**
	 * Проверка на указание ошибки
	 *
	 * @param $message
	 * @param $section
	 */
	protected function error_message_with_section($message, $section)
	{
		$this->assertObjectHasAttribute('section', $message);
		$this->assertAttributeEquals($section, 'section', $message);
	}
}
