<?php
    require_once "classes\Money.php";
    // Задача №1 Перевод градусов Цельсия в Фаренгейт
    function celsius_to_fahrenheit($celsius) : float {
        return $celsius * 1.8 + 32;
    }


    // Задача №2 Перевод рублей в копейки
    function rubles_to_kopecks($rubles, $kopecks) : Money {
        $money = new Money($rubles, $kopecks);
        $money->rubles_to_kopecks($money->getRubles(), $money->getKopecks());
        return $money;
    }


    // Задача № 3 Гонка
    /**
     * Вспомогательная функция для расчётов
     * @param int $time_hour Время в часах
     * @param int $time_minute Время в минутах
     * @param int $time_second Время в секундах
     * @return int Возращаемое время в секуднах
     */
    function time_in_seconds($time_hour, $time_minute, $time_second) : int {
        if ($time_hour < 0 || $time_minute < 0 || $time_second < 0) {
            throw new RuntimeException("Time cannot be negative");
        }
        return $time_hour * 360 + $time_minute * 60 + $time_second;
    }

    function backlog_calculation($time_1_hour, $time_1_minute, $time_1_second,
                $time_2_hour, $time_2_minute, $time_2_second) : int {
        return abs(time_in_seconds($time_1_hour, $time_1_minute, $time_1_second) -
            time_in_seconds($time_2_hour, $time_2_minute, $time_2_second));
    }


    // Задача № 4 Скорость
    function speed_calculation($distance, $time) : float{
        if ($time < 0 || $distance < 0) {
            throw new RuntimeException("Time or distance cannot be negative");
        }
        if ($time == 0) {
            throw new RuntimeException("Time cannot be 0");
        }
        return ($distance * 1000) / ($time * 60);
    }

    // Задача № 5 Катеты
    function hypotenuse_triangle($cathetus_1, $cathetus_2) : float {
        if ($cathetus_1 <= 0 || $cathetus_2 <= 0) {
            throw new RuntimeException("Data entered for a non-existent triangle");
        }
        return sqrt($cathetus_1**2 + $cathetus_2**2);
    }
    function perimeter_triangle($cathetus_1, $cathetus_2) : float {
        if ($cathetus_1 <= 0 || $cathetus_2 <= 0) {
            throw new RuntimeException("Data entered for a non-existent triangle");
        }
        return $cathetus_1 + $cathetus_2 + hypotenuse_triangle($cathetus_1, $cathetus_2);
    }
    function area_triangle($cathetus_1, $cathetus_2) : float {
        if ($cathetus_1 <= 0 || $cathetus_2 <= 0) {
            throw new RuntimeException("Data entered for a non-existent triangle");
        }
        return ($cathetus_1 * $cathetus_2) / 2;
    }

    // Задача № 6 Последняя цифра
    function last_digit_number($number) : int {
        return (int)$number % 10;
    }
    function tens_number($number) : int {   // Выводит и для двузначного числа
        return ((int)$number % 100 - (int)$number % 10) / 10;
    }

    // Задача №7 Перевод копеек в рубли
    function kopecks_to_rubles($kopecks) : Money {
        $money = new Money(0, $kopecks);
        $money->kopecks_to_rubles($money->getKopecks());
        return $money;
    }

    //Задача №8 Интернет магазин
    function online_order_amount($quantity, $rubles, $kopeks) : Money {
        $money = new Money($rubles, $kopeks);
        $money->rubles_to_kopecks($money->getRubles(), $money->getKopecks());
        $money->setKopecks($money->getKopecks() * $quantity);
        $money->kopecks_to_rubles($money->getKopecks());
        return $money;
    }

    //Задача №9 Квадраты
    function number_squares_in_rectangle($square_side, $rectangle_length ,$rectangle_width) : int {
        if ($square_side <= 0 || $rectangle_length <= 0 || $rectangle_width <= 0) {
            throw new RuntimeException("Side cannot be negative or zero");
        }
        return $rectangle_length * $rectangle_width / $square_side**2;
    }