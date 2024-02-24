<?php
	// Задача 1 чет.нечет
	function odd($num): int
	{
		return !($num % 2);
	}
	
	// Задача 2 ладья
	function chess_rock($chess_square_1, $chess_square_2): bool
	{
		$chess_cord_1 = str_split(strtolower($chess_square_1));
		$chess_cord_2 = str_split(strtolower($chess_square_2));
		return ($chess_cord_1[0] === $chess_cord_2[0]) +
			($chess_cord_1[1] === $chess_cord_2[1]);
	}
	
	// Задача 3 Шахматный король
	function chess_king($chess_square_1, $chess_square_2): bool
	{
		$chess_cord_1 = str_split(strtolower($chess_square_1));
		$chess_cord_2 = str_split(strtolower($chess_square_2));
		return ((((int)abs((ord($chess_cord_1[0])) - ord($chess_cord_2[0])) <= 1) +
				((int)(abs(($chess_cord_1[1]) - $chess_cord_2[1]) <= 1))) === 2);
	}
	
	// Задача 4 Гость
	function is_quest($quest): void
	{
		if ($quest === true) {
			echo "Пожалуйста авторизуйтесь";
		}
	}
	
	//Задача 5 Модуль
	function simple_abs($number): float
	{
		return $number > 0 ? $number : $number * -1;
	}
	
	// Задача 6 Максимум
	function maximum($number_1, $number_2): float
	{
		return $number_1 > $number_2 ? $number_1 : $number_2;
	}
	
	// Задача 7 Черное и белое
	function chess_black_or_white($chess_square_1): string
	{
		$chess_cord_1 = str_split(strtolower($chess_square_1));
		if ((ord($chess_cord_1[0]) - ord("a")) % 2 === ($chess_cord_1[1] + 2) % 2) {
			return "Белое";
		}
		return "Черное";
	}
	
	// Задача 8 Проверка на всё четное
	function all_even_number($number_1, $number_2, $number_3): bool
	{
		if (($number_1 % 2 === 0) && ($number_2 % 2 === 0) && ($number_3 % 2 === 0)) {
			return true;
		}
		return false;
	}
	
	// Задача 9 Хотя бы одно чётное
	function some_even_number($number_1, $number_2, $number_3): bool
	{
		if (($number_1 % 2 === 0) || ($number_2 % 2 === 0) || ($number_3 % 2 === 0)) {
			return true;
		}
		return false;
	}
	
	// Задача 10 Выходной
	function weekend($number_day): bool
	{
		if (($number_day % 7 === 5) || ($number_day % 7 === 6)) {
			
			return true;
		}
		return false;
	}
	
	// Задача 11 Треугольник
	function is_triangle($a, $b, $c): bool
	{
		if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
			return true;
		}
		return false;
	}
	
	// Задача 12 Високосный год
	function leap_year($year): string
	{
		if ($year % 4 === 0) {
			if ($year % 100 != 0 || $year % 400 === 0) {
				return "YES";
			}
		}
		return "NO";
	}
	
	// Задача 13 Знак
	function sign_number($number): int
	{
		return $number < 0 ? -1 : ($number === 0 ? 0 : 1);
	}
	
	// Задача 14 Максимальный отрезок
	function maximum_segment($a, $b, $c): int
	{
		return max($a, $b, $c); // 2 сравнения
	}
	
	// Задача 15 Рекомендации
	function temperature_recommendations($temperature): void
	{
		if ($temperature < -30) {
			echo "Оставайтесь дома";
		} elseif ($temperature >= -30 && $temperature < -10) {
			echo "Сегодня холодно";
		} elseif ($temperature >= -10 && $temperature < 5) {
			echo "Не холодно!";
		} elseif ($temperature >= 5 && $temperature < 15) {
			echo "Тепло";
		} elseif ($temperature >= 15 && $temperature < 25) {
			echo "Очень тепло";
		} elseif ($temperature >= 25 && $temperature < 35) {
			echo "Жарко";
		} else {
			echo "Пекло";
		}
	}
	
	
	// Задача 16 Ежедневник
	
	// Вспомогательная функция перевода времени в массив
	function time_to_array($time): array
	{
		return explode(':', $time);
	}
	
	// Вспомогательная функция сравнения времени
	function compare_time($time_1, $time_2): int
	{
		$time_1_array = time_to_array($time_1);
		$time_2_array = time_to_array($time_2);
		if ($time_1_array[0] === $time_2_array[0]) {
			if ($time_1_array[1] === $time_2_array[1]) {
				if ($time_1_array[2] === $time_2_array[2]) {
					return 1;
				} elseif ($time_1_array[2] > $time_2_array[2]) {
					return 1;
				} else {
					
					return -1;
				}
			} elseif ($time_1_array[1] > $time_2_array[1]) {
				return 1;
			} else {
				return -1;
			}
		} elseif ($time_1_array[0] > $time_2_array[0]) {
			return 1;
		} else {
			return -1;
		}
	}
	
	function diary($start_event_1, $finish_event_1, $start_event_2, $finish_event_2): bool
	{
		if (((compare_time($start_event_1, $start_event_2) === -1) ||
				(compare_time($start_event_1, $finish_event_2) === -1))
			&&
			((compare_time($finish_event_1, $start_event_2) === 1) ||
				(compare_time($finish_event_1, $finish_event_2) === 1))) {
			return true;
		}
		
		return false;
	}
	
	// Задача 17 Шоколадка
	function chocolate($m, $n, $k): bool
	{
		if (($k % $n === 0 && $k <= ($m * $n)) || (($k % $m === 0 && $k <= ($m * $n)))) {
			return true;
		}
		return false;
	}
	
	// Задача 18 Выходной 2
	function delivery($n, $k): int
	{
		$result = $n + $k;
		while (weekend($result)) {
			echo $result;
			$result++;
		}
		return $result;
	}
	
	// Задача 19 Который час
	function what_time_now($time): string
	{
		if ($time % 10 == 1 && $time % 100 != 11) {
			return 'час';
		} elseif (($time % 10 == 2 || $time % 10 == 3 || $time % 10 == 4) && ($time % 100 < 10 || $time % 100 >= 20)) {
			return 'часа';
		} else {
			return 'часов';
		}
	}