<?php namespace API\Exception;

class Exception extends \Exception {

	protected $httpStatusCode;
	protected $errors;
	protected $errorType;

	/**
	 * Constructor.
	 *
	 * @param string  $message        The Exception message to throw
	 * @param int     $code           The Exception code
	 * @param int     $httpStatusCode HTTP status code which can be used for broken request
	 */
	public function __construct($message = '', $code = 0, $httpStatusCode = NULL)
	{

		if($httpStatusCode)
			$this->httpStatusCode = $httpStatusCode;

		$this->setErrors($message);

		parent::__construct($message, $code);
	}

	/**
	 * @return mixed
	 */
	public function getErrorType()
	{
		return $this->errorType;
	}


	/**
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	 * @param array $errors
	 */
	public function setErrors($errors)
	{
		$this->errors = $errors;
	}
}