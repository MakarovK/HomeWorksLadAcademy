<?php
require_once "service\Tasks.php";
require_once "classes\Money.php";

    // Проверка для задачи 1:
    echo "Проверка для задачи №1: " . PHP_EOL . celsius_to_fahrenheit(37.2)
        . " F" . PHP_EOL;

    // Проверка для задачи 2:
    echo "Проверка для задачи №2: " . PHP_EOL . kopecks_to_rubles(23043);

    // Проверка для задачи 3:
    echo "Проверка для задачи №3: " . PHP_EOL .
        backlog_calculation(2, 30, 25,
            2, 40, 50)
        . " c" . PHP_EOL;

    // Проверка для задачи 4:
    echo "Проверка для задачи №4: " . PHP_EOL . speed_calculation(117, 22)
        . " м/с" . PHP_EOL;

    // Проверка для задачи 5:
    echo "Проверка для задачи №5: " . PHP_EOL . hypotenuse_triangle(5, 4) . PHP_EOL;
    echo perimeter_triangle(5, 4) . PHP_EOL;
    echo area_triangle(5, 4) . PHP_EOL;

    // Проверка для задачи 6:
    echo "Проверка для задачи №6: " . PHP_EOL . last_digit_number(23395234) . PHP_EOL;

    // Проверка для задачи 7:
    echo "Проверка для задачи №7: " . PHP_EOL . rubles_to_kopecks(230, 43);

    // Проверка для задачи 8:
    echo "Проверка для задачи №8: " . PHP_EOL . online_order_amount(5, 10, 5);

    // Проверка для задачи 9:
    echo "Проверка для задачи №8: " . PHP_EOL . number_squares_in_rectangle(5, 15, 16);