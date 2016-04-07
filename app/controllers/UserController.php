<?php
use API\Transformers\SuffixTransformer;

/**
 * Class UserController
 */
class UserController extends BaseController {

	/**
	 * @var SuffixTransformer
	 */
	private $suffixTransformer;

	function __construct(SuffixTransformer $suffixTransformer)
	{
		$this->suffixTransformer = $suffixTransformer;
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getCabinet()
	{
		$user = User::with('client')->find(Auth::user()->id);

		$client = $user->client;

		return View::make('content.user.cabinet', [
			'client_name' => ($client->fio()) ?: 'dear client'
		]);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getEdit()
	{
		$user = User::with('client')->findOrFail(Auth::user()->id);
		$suffixes = [];
		foreach($this->suffixTransformer->transformCollection(Suffix::all()) as $suffix)
			$suffixes[$suffix['id']] = $suffix['name'];

		$available_languages = [];
		foreach(I18n::getSupportedLocales() as $alias => $supported_lang)
			$available_languages[$alias] = $supported_lang['native'];

		return View::make('forms.user.edit', [
			'client' => $user->client,
			'suffixes' => $suffixes,
			'available_languages' => $available_languages,
		]);
	}

	public function getPasswordChange()
	{
		$user = User::with('client')->findOrFail(Auth::user()->id);

		return View::make('forms.user.password-change');
	}
}
