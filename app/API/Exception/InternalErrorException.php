<?php  namespace API\Exception;

class InternalErrorException extends Exception {
	protected $errorType = 'InternalError';
}