<?php
	
	namespace src\php\exceptions;
	use Exception;
	class AuthException extends Exception
	{
		public function __construct($message = "Access Denied", Exception $previous = null)
		{
			parent::__construct($message, $previous);
		}
	}