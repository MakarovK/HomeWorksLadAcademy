<?php
	
	
	function init_dictionary(): void
	{
		global $DICTIONARY;
		if (empty($DICTIONARY)) {
			$DICTIONARY = [
				'яблоко' => 'плод яблони, имеющий много сортов и разновидностей, обладающий приятным вкусом и ароматом',
				'банан'  => 'тропический фрукт, имеющий длинную кривую форму и жёлтую кожуру',
				'машина' => 'устройство или механизм, предназначенный для какой-либо деятельности, часто ассоциируется с транспортным средством',
				'кот'    => 'домашнее животное, часто держится в качестве компаньона или питомца',
				'солнце' => 'центральная звезда Солнечной системы, обеспечивающая свет и тепло для Земли',
				'дерево' => 'растение с древовидным стволом, ветвями и листьями, которое играет важную роль в экосистеме',
				'вода'   => 'бесцветная, безвкусная жидкость(божественный нектар после тренировки), являющаяся одним из основных составляющих всех живых организмов',
			];
		}
	}
	
	function init_basket(): void
	{
		global $BASKET;
		if(empty($BASKET)) {
			$BASKET = [
				13 => ['name' => 'Кеды', 'count' => 2, 'price' => 123],
				28 => ['name' => 'Самолет', 'count' => 1, 'price' => 9999999],
				42 => ['name' => 'Футболка', 'count' => 3, 'price' => 350],
				51 => ['name' => 'Шорты', 'count' => 1, 'price' => 450],
				66 => ['name' => 'Рюкзак', 'count' => 2, 'price' => 750],
			];
		}
	}
	
	// Задача 1 Просто
	function create_array_reputation(...$name): array
	{
		$reputation_array = array();
		$reputation_array_length = func_num_args();
		for ($i = 0; $i < $reputation_array_length; $i++) {
			$reputation_array[func_get_arg($i)] = rand(50, 100);
		}
		return $reputation_array;
	}
	
	// Задача 2 Поиск данных
	function find_value($array, $key): mixed
	{
		if (isset($array[$key])) {
			return $array[$key];
		} else {
			echo "Данные не найдены";
		}
		return null;
	}
	
	// Задача 3 Глоссарий
	
	function glossary($word): ?string
	{
		global $DICTIONARY;
		init_dictionary();
		if (isset($DICTIONARY[$word])) {
			return $word . " - " . $DICTIONARY[$word];
		} else {
			return null;
		}
	}
	
	// Задача 4 Выше крыши
	function bowl_rice_and_a_cat_girl($users): array
	{
		foreach ($users as &$user) {
			if ($user > 100) {
				$user = 100;
			}
		}
		return $users;
	}
	
	// Задача 5 Данила Мастер
	function is_master($masters, $name): string
	{
		if (isset($masters[$name])) {
			return $masters[$name] <= 30 ? "Junior" :
				($masters[$name] <= 60 ? "Middle" : "Senior");
		}
		return "There is no master with that name";
	}
	
	// Задача 6 Рейтинг +1
	function rating(&$masters, $name): void
	{
		if (isset($masters[$name])) {
			$masters[$name]++;
		} else {
			$masters[$name] = 0;
		}
	}
	
	// Задача 7 Бан
	function ban_hammer(&$masters, $name): void
	{
		if (isset($masters[$name])) {
			if ($masters[$name] < 0) {
				unset($masters[$name]);
			}
		}
	}
	
	// Задача 8 Файл
	function file_directory_name($path): array
	{
		$array = explode("/", $path);
		$fileName = $array[count($array) - 1];
		unset($array[count($array) - 1]);
		$folderName = implode("/", $array);
		return [$fileName, $folderName];
	}
	
	// Задача 9 Царь горы
	function max_reputation($users): array
	{
		$reputations = array_values($users);
		
		array_multisort($reputations, SORT_DESC, $users);
		
		$top_users_keys = array_slice(array_keys($users), 0, 3);
		
		return array_intersect_key($users, array_flip($top_users_keys));
	}
	
	// Задача 10 День недели
	function translate_day_week($text): string
	{
		$week_day_russian = ['Понедельник', 'Вторник', 'Среда',
							 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
		$week_day_english = ['Monday', 'Tuesday', 'Wednesday',
							 'Thursday', 'Friday', 'Saturday', 'Sunday'];
		return str_replace($week_day_english, $week_day_russian, $text);
	}
	
	// Задача 11 Лето
	function season($month_name): string
	{
		
		$seasons = [
			'январь'   => 'зима',
			'февраль'  => 'зима',
			'март'     => 'весна',
			'апрель'   => 'весна',
			'май'      => 'весна',
			'июнь'     => 'лето',
			'июль'     => 'лето',
			'август'   => 'лето',
			'сентябрь' => 'осень',
			'октябрь'  => 'осень',
			'ноябрь'   => 'осень',
			'декабрь'  => 'зима'
		];
		
		$month_name_lower = mb_strtolower($month_name);
		
		return $seasons[$month_name_lower] ?? "Месяц не найден";
	}
	
	// Задача 12 Корзина
	function basket($id): int
	{
		global $BASKET;
		init_basket();
		if(isset($BASKET[$id])) {
			return $BASKET[$id]['price'];
		}
		return 0;
	}
	
	
	
	
	
	
	
	