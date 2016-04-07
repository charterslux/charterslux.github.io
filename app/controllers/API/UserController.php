<?php namespace API;

use API\Transformers\ClientTransformer;
use Auth;
use Client;
use Site\Client\ClientEditCommand;
use Site\User\UserChangePasswordCommand;
use User;

/**
 * AuthController Ajax Controller
 *
 * @namespace API
 * @route Route::get('/', 'AuthController@index');
 * @project dev.anywayjet.com
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */

class UserController extends BaseController {

	protected $from_edit = FALSE;

	/**
	 * @var ClientTransformer
	 */
	protected $clientTransformer;

	/**
	 * @param ClientTransformer $ClientTransformer
	 */
	function __construct(ClientTransformer $ClientTransformer)
	{
		$this->clientTransformer = $ClientTransformer;
	}

	/**
	 * Получение данных Клиента
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyInfo()
	{
		$user = Auth::user();
		$client = Client::with('user', 'citizenship', 'suffix')->where('user_id', $user->id)->get()->first();

		if( ! $client)
			$client = Client::create(array('user_id' => Auth::user()->id));

		$message = array();
		if($this->from_edit)
			$message = array('message' => trans('messages.user.edit.success', [], NULL, $client->preferred_language));

		return $this->respond([
			'data' => $this->clientTransformer->transform($client->toArray())
		]+$message);
	}

	/**
	 * Редактирование данных Клиента
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyEdit()
	{
		$this->execute(ClientEditCommand::class);

		$this->from_edit = TRUE;

		return $this->anyInfo();
	}

	/**
	 * Смена пароля по форме
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyChangePassword()
	{
		$this->execute(UserChangePasswordCommand::class);

		return $this->respondWithSuccess(trans('messages.user.pass.pass_changed'));
	}
}
