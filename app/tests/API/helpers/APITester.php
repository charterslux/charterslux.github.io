<?php namespace API\helpers;

use Artisan;
use DB;
use Faker\Factory;
use Illuminate\Foundation\Testing\TestCase;
use Route;

/**
 * Class APITester
 * @package API
 */
class APITester extends TestCase {

	/**
	 * @var Factory
	 */
	protected $fake;

	/**
	 * @internal param null|string $faker
	 */
	function __construct()
	{
		$this->fake = Factory::create();
	}

	/**
	 *
	 */
	public static function setUpBeforeClass()
	{
		parent::setUpBeforeClass();

		$_SERVER['LARAVEL_ENV'] = 'testing';
		require __DIR__ . '/../../../../bootstrap/start.php';

		Artisan::call('migrate');
		Artisan::call('db:seed');
	}

	/**
	 *
	 */
	public function setUp()
	{
		parent::setUp();

		Route::enableFilters();
		$this->flushSession();
	}

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		return require __DIR__ . '/../../../../bootstrap/start.php';
	}

	/**
	 * @param string $url
	 * @param string $method
	 * @param array  $parameters
	 *
	 * @return string
	 */
	public function getJsonWithSuccess($url, $method = 'GET', $parameters = [])
	{
		$responseJSON = $this->getJSON($url, $method, $parameters);
		$this->assertResponseOk();
		return $responseJSON;
	}

	/**
	 * @param string $url
	 * @param string $method
	 * @param array  $parameters
	 *
	 * @return mixed
	 */public function getJsonWithError($url, $method, $parameters)
	{
		$responseJSON = $this->getJson($url, $method, $parameters);
		$this->assertAttributeNotEquals(200, 'status', $responseJSON);
		return $responseJSON;
	}

	/**
	 *
	 */
	protected function assertObjectHasAttributes()
	{
		$args = func_get_args();

		$object = array_shift($args);

		foreach($args as $attribute)
		{
			$this->assertObjectHasAttribute($attribute, $object);
		}
	}

	/**
	 * @param $expected
	 * @param $actual
	 * @param $attributes
	 */
	protected function assertObjectsAttributesAreEqualEachOther($expected, $actual, $attributes)
	{
		foreach($attributes as $attribute)
			$this->assertEquals($expected->{$attribute}, $actual->{$attribute});
	}

	/**
	 * @param $respond_object
	 */
	protected function assertRespondPagination($respond_object)
	{
		$this->assertObjectHasAttribute('pagination', $respond_object);

		$this->assertObjectHasAttributes(
			$respond_object->pagination, 'total_items', 'total_pages', 'per_page', 'current_page', 'next_page', 'last_page'
		);
	}

	private function getJSON($url, $method, $parameters)
	{
		return json_decode($this->call($method, $url, $parameters)->getContent());
	}
}
