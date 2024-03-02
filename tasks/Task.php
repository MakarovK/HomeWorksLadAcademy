<?php
	// Задача 1 Слава КПСС
	function text_n_times($text, $n): string
	{
		return str_repeat($text . " ", $n);
	}
	
	// Задача 2 Абзац
	function paragraph_k_times($paragraph, $k): string
	{
		return str_repeat("<p>$paragraph</p>", $k);
	}
	
	// Задача 3 Половина
	function prize_amount($prize, $b): int
	{
		$count = 0;
		while ($prize >= $b) {
			$prize /= 2;
			$count++;
		}
		return $count;
	}
	
	// Задача 4 Кто есть кто Chat GPT предложил забавное решение, оставлю его тут
	function who_is_who($users): void
	{
		$maxRating = max($users);
		echo "╔═══════════════╦═════════════╦════════════╗\n";
		echo "║ Пользователь  ║ Рейтинг     ║ Графика    ║\n";
		echo "╠═══════════════╬═════════════╬════════════╣\n";
		foreach ($users as $user => $rating) {
			$barLength = intval(($rating / $maxRating) * 20);
			echo "║ " . str_pad($user, 14) . "║ " . str_pad($rating, 11) . "║ " . str_repeat('█', $barLength) . "║\n";
		}
		echo "╚═══════════════╩═════════════╩════════════╝\n";
	}
	
	// Задача 5 Весь рейтинг
	function all_rating($users): int
	{
		$sum = 0;
		foreach ($users as $user => $rating) {
			$sum += $rating;
		}
		return $sum;
	}
	
	// Задача 6 Средняя по больнице
	function average_rating($users): float
	{
		$sum = 0.0;
		$counter = 0;
		foreach ($users as $user => $rating) {
			if ($rating !== 0) {
				$sum += $rating;
				$counter++;
			}
		}
		return $sum / $counter;
	}
	
	// Задача 7 Выше крыши 2
	function maximum_rating_one_hundred(&$users): void
	{
		foreach ($users as &$user) {
			if ($user > 100) {
				$user = 100;
			}
		}
	}
	
	// Задача 8 Второе дно
	function minimum_rating_zero(&$users): void
	{
		foreach ($users as &$user) {
			if ($user < 0) {
				$user = 0;
			}
		}
	}
	
	// Задача 9 Экватор
	function above_average_users($users): array
	{
		$result = array();
		foreach ($users as $user => $rating) {
			if ($rating > 50) {
				$result[$user] = $rating;
			}
		}
		return $result;
	}
	
	// Задача 9 Данила Мастер 2
	function user_ratings($users): void
	{
		foreach ($users as $user => $rating) {
			if ($rating <= 30) {
				$status = 'Junior';
			} elseif ($rating <= 60) {
				$status = 'Middle';
			} else {
				$status = 'Senior';
			}
			
			echo "$user: $rating ($status)" . PHP_EOL;
		}
	}
	
	// Задача 10 Выйди вон
	function unique_users($users1, $users2): array
	{
		return array_diff_key($users1, array_flip($users2));
	}
	