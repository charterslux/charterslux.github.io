<?php namespace API;

use API\helpers\APITester;
use API\helpers\Factory;
use User;

/**
 * Class UserTest
 *
 * @package API
 * @coversDefaultClass API\UserController
 */
class UserTest extends APITester {

	use Factory;

	/**
	 * @covers ::anyInfo
	 */
	public function testUserInfo()
	{
		$user = User::with('client')->find(1);
		$auth_data = $this->get_auth_data($user);

		$data = $this->getJsonWithSuccess('/api/user/info', 'GET', $auth_data)->data;

		$client_birthday = ($user->client->borned_at) ? $user->client->borned_at->format('Y-m-d H:i:s') : NULL;

		$this->assertObjectHasAttributes($data->client, 'id', 'last_name', 'first_name', 'patronymic', 'sex', 'borned_at', 'passport', 'phone_number', 'citizenship');

		$this->assertObjectsAttributesAreEqualEachOther($user->client, $data->client, [
			'id', 'last_name', 'first_name', 'patronymic', 'sex', 'borned_at', 'passport', 'phone_number'
		]);

		$this->assertObjectsAttributesAreEqualEachOther($user, $data->user, ['id', 'email']);
	}

	public function test_editing_user_data()
	{
		// grab user
		// change some data
		// check data changing
	}
}
