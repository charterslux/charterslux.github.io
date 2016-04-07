<?php namespace API;

use File;
use I18n;

/**
 * LocalizationController
 *
 * @namespace API
 * @route Route::get('/', 'LocalizationController@index');
 * @project chartersluxury.com
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */

class LocalizationController extends BaseController {

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getIndex()
	{
		$translation_file = File::getRequire(base_path().'/app/lang/'.I18n::getCurrentLocale().'/mobile.php');

		return $this->respond([
			'data' => $translation_file
		]);
	}

}
