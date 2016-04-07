<?php namespace API;
use API\Transformers\PageTransformer;
use API\Transformers\SuffixTransformer;
use DateTime;
use I18n;
use Input;
use Page;
use Suffix;
use View;

/**
 * HelpersController
 *
 * @namespace API
 * @route Route::get('/', 'HelpersController@index');
 * @project dev.anywayjet.com
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */

class HelpersController extends BaseController {

	/**
	 * @var PageTransformer
	 */
	protected $pageTransformer;

	/**
	 * @var SuffixTransformer
	 */
	private $suffixTransformer;

	/**
	 * @param PageTransformer   $pageTransformer
	 * @param SuffixTransformer $suffixTransformer
	 */
	function __construct(PageTransformer $pageTransformer, SuffixTransformer $suffixTransformer)
	{
		$this->pageTransformer   = $pageTransformer;
		$this->suffixTransformer = $suffixTransformer;
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getTimeSync()
	{
		$now = new DateTime();
		return $this->respond(['data' => $now->format('M j, Y H:i:s O')]);
	}

	/**
	 * Отображение тела модального окна
	 *
	 * @param string $modalBodyName
	 * @param mixed  $parameter_1
	 * @param mixed  $parameter_2
	 *
	 * @return \Illuminate\View\View
	 */public function getModalBody($modalBodyName, $parameter_1 = null, $parameter_2 = null)
	{
		if(method_exists($this, $modalBodyName))
			return $this->{$modalBodyName}();

		return View::make('modal-bodies.'.$modalBodyName, ['param_1' => $parameter_1, 'param_2' => $parameter_2]);
	}

	public function register()
	{
		$suffixes = [];
		foreach($this->suffixTransformer->transformCollection(Suffix::all()) as $suffix)
			$suffixes[$suffix['id']] = $suffix['name'];

		$preferred_languages = [];
		foreach(I18n::getSupportedLocales() as $alias => $supported_lang)
			$preferred_languages[$alias] = $supported_lang['native'];

		return View::make('modal-bodies.register', [
			'suffixes' => $suffixes,
			'preferred_languages' => $preferred_languages
		]);
	}

	public function getPageContent()
	{
		$pageAlias = Input::get('page');

		if( ! $pageAlias)
			return $this->respondWithBadRequest('Page alias not set');

		$page = Page::where('lang', I18n::getCurrentLocale())
			->where('alias', $pageAlias)
			->first()
		;

		if( ! $page)
			return $this->respondNotFound('Page not Found');

		return $this->respond(['data' => $this->pageTransformer->transform($page)]);
	}

	public function getPasswordRemind()
	{
		return View::make('modal-bodies.remember', [

		]);
	}

}
