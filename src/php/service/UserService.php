<?php
	namespace src\php\service;
	
	spl_autoload_register(function ($class_name) {
		require_once '../' . $class_name . '.php';
	});
	use JetBrains\PhpStorm\NoReturn;
	use src\php\exceptions\AuthException;
	class UserService
	{
		private static ?UserService $instance = null;
		const PATH_TO_DATABASE = "C:\Users\Константин\PhpstormProjects\HomeWorksLadAcademy\data\users.json";
		
		private function __construct() { }
		
		/**
		 * @throws AuthException
		 */
		#[NoReturn] public function authenticateUser($login, $password, $is_remember): void
		{
			$users_in_database = $this->getUserDataFromDatabase();
			foreach ($users_in_database as $user) {
				if ($user['login'] === $login && $user['password'] === $password) {
					if ($is_remember) {
						setcookie('username', $login, time() + (86400 * 30), "/");
					} else {
						session_start();
						$_SESSION['username'] = $login;
					}
					return;
				}
			}
			throw new AuthException("Неверные данные");
		}
		
		public function checkAccess(): bool {
			session_start();
			return isset($_SESSION['username']) || isset($_COOKIE['username']);
		}
		
		public function registration($login, $password): void
		{
			if ($this->isUserExists($login)) {
				throw new AuthException("Такой пользователь уже существует");
			}
			$user_data = [
				'login' => $login,
				'password' => $password
			];
			$this->saveUserDataToDatabase($user_data);
		}
		
		private function isUserExists($login): bool
		{
			$usersData = $this->getUserDataFromDatabase();
			foreach ($usersData as $user) {
				if ($user['login'] === $login) {
					return true;
				}
			}
			return false;
		}
		private function getUserDataFromDatabase(): array
		{
			$jsonData = file_get_contents(self::PATH_TO_DATABASE);
			return json_decode($jsonData, true);
		}
		private function saveUserDataToDatabase($usersData): void
		{
			$currentData = $this->getUserDataFromDatabase();
			$currentData[] = $usersData;
			$jsonData = json_encode($currentData);
			file_put_contents(self::PATH_TO_DATABASE, $jsonData);
		}
		
		public static function getInstance(): UserService
		{
			if (self::$instance === null) {
				self::$instance = new UserService();
			}
			return self::$instance;
		}
	}