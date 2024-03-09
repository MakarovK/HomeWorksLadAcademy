<?php
	spl_autoload_register(function ($class_name) {
		require_once '../' . $class_name . '.php';
	});
    use src\php\service\UserService;
	$user_service = UserService::getInstance();
	if (!$user_service->checkAccess()) {
		header("Location: index.php");
		exit();
	}
    if(isset($_POST['logout'])) {
		session_start();
		session_unset();
		session_destroy();
		setcookie('username', '', time() - 3600, "/");
		header("Location: index.php");
		exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Грузоперевозки</title>
    <style>
        /* Стили для заголовка */
        h1 {
            color: #333;
            text-align: center;
        }

        /* Стили для основного контента */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Стили для секций */
        section {
            margin-bottom: 40px;
        }

        /* Стили для изображений */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Стили для ссылок */
        a {
            color: #007bff;
            text-decoration: none;
        }

        /* Стили для кнопок */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
    <h1>Грузоперевозки</h1>
</header>
<div class="container">
    <section>
        <h2>О нас</h2>
        <p>Мы предоставляем высококачественные услуги по грузоперевозкам по всей стране. Наша компания имеет большой
            опыт в этой области и гарантирует надежность и эффективность в выполнении задач.</p>
    </section>
    <section>
        <h2>Услуги</h2>
        <ul>
            <li>Грузоперевозки по городу</li>
            <li>Междугородные грузоперевозки</li>
            <li>Международные грузоперевозки</li>
            <li>Аренда транспорта для грузоперевозок</li>
        </ul>
    </section>
    <section>
        <h2>Наши преимущества</h2>
        <ul>
            <li>Быстрая и надежная доставка</li>
            <li>Профессиональные водители и перевозчики</li>
            <li>Индивидуальный подход к каждому клиенту</li>
            <li>Конкурентные цены</li>
        </ul>
    </section>
    <section>
        <h2>Контакты</h2>
        <p>Свяжитесь с нами для получения дополнительной информации или оформления заказа:</p>
        <p>Телефон: +7 (XXX) XXX-XX-XX</p>
        <p>Email: info@example.com</p>
    </section>
    <section>
        <h2>Оформить заказ</h2>
        <a href="order.html" class="btn">Заказать грузоперевозку</a>
    </section>
</div>
<footer>
    <div class="container">
        <p>© 2024 Грузоперевозки. Все права защищены.</p>
    </div>
</footer>

<!-- Кнопка для выхода -->
<form method="post">
    <div class="container">
        <button type="submit" name="logout" class="btn">Выйти</button>
    </div>
</form>

</body>
</html>