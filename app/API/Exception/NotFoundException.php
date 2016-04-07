<?php  namespace API\Exception;

class NotFoundException extends Exception {
	protected $errorType = 'NotFound';
}