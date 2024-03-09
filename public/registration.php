<?php
	spl_autoload_register(function ($class_name) {
		require_once '../' . $class_name . '.php';
	});
	
	use src\php\service\UserService;
	use src\php\exceptions\AuthException;
	
	$user_service = UserService::getInstance();
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        if ($_POST['password'] !== $_POST['confirm_password']) {
			header("Location: registration.php?error=");
			exit();
        }
		try {
			$user_service->registration($_POST['username'], $_POST['password']);
			header("Location: title.php");
			exit();
		} catch (AuthException $e) {
			header("Location: registration.php?error=".$e->getMessage());
			exit();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        /* Стили для формы */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Стили для текстовых полей и кнопок */
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Стили для кнопок */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        /* Стили для ссылок */
        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<form action="registration.php" method="post">
    <h2>Регистрация</h2>
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <input type="password" name="confirm_password" placeholder="Подтверждение пароля" required>
    <input type="submit" value="Зарегистрироваться">
</form>
<p>Уже есть аккаунт? <a href="index.php">Войти</a></p>
</body>
</html>

