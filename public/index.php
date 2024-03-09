<?php
	spl_autoload_register(function ($class_name) {
		require_once '../' . $class_name . '.php';
	});
	use src\php\service\UserService;
    $user_service = UserService::getInstance();
	if ($user_service->checkAccess()) {
		header("Location: ../title.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя страница</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1>Добро пожаловать!</h1>
<p>Введите свой логин и пароль:</p>
<form action="authentication/authentication.php" method="POST">
    <label for="login">Логин:</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="password">Пароль:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Войти">
</form>
<button onclick="location.href = 'registration.php';">Регистрация</button>

<script>
    function redirectToRegistration() {
        window.location.href = "registration.php";
    }
</script>
</body>
</html>
