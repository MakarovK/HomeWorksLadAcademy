<?php
	namespace public\authentication;
	
	spl_autoload_register(function ($class_name) {
		require_once '../../' . $class_name . '.php';
	});
	
	use src\php\exceptions\AuthException;
	use src\php\service\UserService;
	function getLoginFromPost() {
		return $_POST['login'] ?? null;
	}
	function getPasswordFromPost() {
		return $_POST['password'] ?? null;
	}
	$user_service = UserService::getInstance();
	if ($user_service->checkAccess()) {
		header("Location: ../title.php");
		$log_message = "\n" . "Мы тут " . $user_service->checkAccess() . "\n";
		file_put_contents("../../logs/log.txt", $log_message, FILE_APPEND | LOCK_EX);
		exit();
	}
	$login = getLoginFromPost();
	$password = getPasswordFromPost();
	try {
		$user_service->authenticateUser($login, $password, false);
		header("Location: ../title.php");
		exit();
	} catch (AuthException $e) {
		header("Location: ../authentication_error.html");
		exit();
	}
	