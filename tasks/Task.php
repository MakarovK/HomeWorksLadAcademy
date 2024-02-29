<?php
	
	// Задача 1 Шестизначное число
	function six_digit_format($number): string
	{
		return sprintf('%06d', $number);
	}
	
	// Задача 2 Часы
	function clock($second): string
	{
		$hours = $second / 3600;
		$minutes = ($second % 3600) / 60;
		$seconds = ($second % 60);
		return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
	}
	
	// Задача 3 ФИО
	function full_name($name, $surname, $middle_name): string
	{
		$name_first_letter = mb_substr($name, 0, 1);
		$middle_name_first_letter = mb_substr($middle_name, 0, 1);
		return sprintf("%s %s.%s.", $surname, $name_first_letter, $middle_name_first_letter);
	}
	
	// Задача 4 Короткий пароль
	function short_password($password): void
	{
		if (mb_strlen($password) < 8) {
			echo "Слишком короткий пароль";
		}
	}
	
	// Задача 5 Пробел
	function password_gap($string): void
	{
		if (str_contains($string, " ")) {
			echo "Пароль содержит пробелы";
		}
	}
	
	// Задача 6 Ровно
	function comparison_letters($string_1, $string_2): bool
	{
		$letter_str_1 = mb_strlen(preg_replace('/[^a-zA-ZА-я]/u', '', $string_1));
		$letter_str_2 = mb_strlen(preg_replace('/[^a-zA-ZА-я]/u', '', $string_2));
		return $letter_str_1 === $letter_str_2;
	}
	
	// Задача 7 Подробнее
	function more_details($text): string
	{
		define("MAX_TEXT_SIZE", 50);
		if (mb_strlen($text) > MAX_TEXT_SIZE) {
			$text = mb_substr($text, 0, MAX_TEXT_SIZE) . "<a href=#> Подробнее</a>";
		}
		return $text;
	}
	
	// Задача 8 Короче
	
	function reduction($string): string
	{
		$result = $string;
		$str_length = mb_strlen($string);
		if ($str_length > 7) {
			$result = mb_substr($string, 0, 4) . "-" . mb_substr($string, $str_length - 2, $str_length);
		}
		return $result;
	}
	
	// Задача 9 Коровы
	function occurrence_character($string, $symbol): int
	{
		return mb_substr_count($string, $symbol);
	}
	
	// Задача 10 Caps Lock
	function capslock($password): string
	{
		$real_pass = "qwerty123";
		return $password === $real_pass ? "Добро пожаловать!" : ($password === strtoupper($real_pass) ?
			"Возможно нажата клавиша Caps Lock..." : "Password uncorrected");
	}
	
	// Задача 11 Регистронезависимые коровы
	function case_insensitive_occurrence_character($string, $symbol): int
	{
		return occurrence_character(strtolower($string), strtolower($symbol));
	}
	
	// Задача 12 Курсив
	function italics($string, $word): void
	{
		$italic_result = str_ireplace($word, "<i>$word</i>", $string);
		echo $string . PHP_EOL . $italic_result;
	}
	
	// Задача 13 Тег
	function remove_tag($tag_string): string
	{
		return strip_tags($tag_string);
	}
	
	// Задача 14 Без комментариев
	function remove_comments($string): string
	{
		$result = "";
		$string_length = mb_strlen($string);
		for ($i = 0; $i < $string_length; $i++) {
			if (($string[$i] === "/") && ($string[$i + 1] === "*")) {
				while (!($string[$i] === "*" && $string[$i + 1] === "/") && $i < $string_length - 1) {
					$i++;
				}
				$i++;
			} else {
				$result .= $string[$i];
			}
		}
		return $result;
	}
	// Задача 15 Поиск
	function highlight_keyword($string, $word): string {
		$text_sentences = preg_split('/[.!?]/', $string);
		foreach ($text_sentences as $sentence) {
			if (stripos($sentence, $word) !== false) {
				// Если ключевое слово найдено, выделяем все вхождения
				return str_ireplace($word, "<strong>$word</strong>", $sentence);
			}
		}
		// Если ключевое слово не найдено во всех предложениях, возвращаем пустую строку
		return "";
	}