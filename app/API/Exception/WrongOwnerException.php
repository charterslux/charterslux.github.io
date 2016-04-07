<?php  namespace API\Exception;

class WrongOwnerException extends Exception {
	protected $errorType = 'Forbidden';
}