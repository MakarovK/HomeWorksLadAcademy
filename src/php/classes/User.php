<?php
	namespace src\php\classes;
		class User
	{
		private string $login;
		private string $password;
		
		public function getLogin(): string
		{
			return $this->login;
		}
		
		public function setLogin(string $login): void
		{
			if ($login != null) {
				$this->login = $login;
			}
		}
		
		public function getPassword(): string
		{
			return $this->password;
		}
		
		public function setPassword(string $password): void
		{
			if ($password != null) {
				$this->password = $password;
			}
		}
	}