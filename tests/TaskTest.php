<?php
	require_once "tasks/Task.php";
	
	use PHPUnit\Framework\TestCase;
	
	class TaskTest extends TestCase
	{
		// Тесты для задания 1
		public function test_text_n_times()
		{
			$text = 'Hello';
			$n = 3;
			$expectedResult = 'Hello Hello Hello ';
			$this->assertEquals($expectedResult, text_n_times($text, $n));
		}
		
		// Тесты для задания 2
		public function test_paragraph_k_times()
		{
			$paragraph = 'Minecraft.';
			$k = 4;
			$expectedResult = '<p>Minecraft.</p><p>Minecraft.</p><p>Minecraft.</p><p>Minecraft.</p>';
			$this->assertEquals($expectedResult, paragraph_k_times($paragraph, $k));
		}
		
		// Тесты для задания 3
		public function test_prize_amount()
		{
			
			$this->assertEquals(7, prize_amount(100, 1));
			$this->assertEquals(3, prize_amount(50, 7));
			$this->assertEquals(0, prize_amount(10, 20));
			
		}
		
		// Тесты для задания 4 в мейне
		
		// Тесты для задания 5
		public function test_all_rating()
		{
			$users = [
				'Vasya'      => 25,
				'Misha'      => 35,
				'Konstantin' => 45
			];
			$this->assertEquals(105, all_rating($users));
		}
		
		// Тесты для задания 6
		public function test_average_rating()
		{
			{
				$users = [
					'User1' => 80,
					'User2' => 0,
					'User3' => 60,
					'User4' => 90
				];
				$expectedAverage = (80 + 60 + 90) / 3;
				$actualAverage = average_rating($users);
				$this->assertEquals($expectedAverage, $actualAverage);
			}
		}
		
		// Тесты для задания 7
		public function test_maximum_rating_one_hundred()
		{
			$users = [80, 110, 95, 100];
			maximum_rating_one_hundred($users);
			$expected = [80, 100, 95, 100];
			$this->assertEquals($expected, $users);
		}
		
		// Тесты для задания 8
		public function test_minimum_rating_zero()
		{
			$users = [-10, -5, 50, 32];
			minimum_rating_zero($users);
			$expected = [0, 0, 50, 32];
			$this->assertEquals($expected, $users);
		}
		
		// Тесты для задания 9
		public function test_above_average_users()
		{
			$users = [
				'user1' => 70,
				'user2' => 40,
				'user3' => 60,
				'user4' => 80,
				'user5' => 30,
			];
			
			$expectedResult = [
				'user1' => 70,
				'user3' => 60,
				'user4' => 80,
			];
			
			$this->assertEquals($expectedResult, above_average_users($users));
		}
		
		// Тесты для задания 10
		public function test_user_ratings()
		{
			$users = [
				'user1' => 25,
				'user2' => 50,
				'user3' => 70,
			];
			
			$expectedOutput = "user1: 25 (Junior)" . PHP_EOL .
				"user2: 50 (Middle)" . PHP_EOL .
				"user3: 70 (Senior)" . PHP_EOL;
			
			ob_start();
			user_ratings($users);
			$actualOutput = ob_get_clean();
			
			$this->assertEquals($expectedOutput, $actualOutput);
		}
		// Тесты для задания 11
		public function test_unique_users()
		{
			$users1 = ['user1' => 1, 'user2' => 2, 'user3' => 3];
			$users2 = ['user2', 'user3', 'user4'];
			$expectedResult = ['user1' => 1];
			
			$result = unique_users($users1, $users2);
			
			$this->assertEquals($expectedResult, $result);
		}
	}
	