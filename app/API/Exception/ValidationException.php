<?php  namespace API\Exception;

class ValidationException extends Exception {
	protected $errorType = 'BadRequest';
}