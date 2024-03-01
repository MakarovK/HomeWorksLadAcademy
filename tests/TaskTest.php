<?php
	require_once "tasks/Task.php";
	
	use PHPUnit\Framework\TestCase;
	
	class TaskTest extends TestCase
	{
		// Тесты для задания 1
		public function testCreateArrayReputation() {
			$reputation1 = create_array_reputation('John', 'Alice', 'Bob');
			$reputation2 = create_array_reputation('Mary', 'James', 'Sophia', 'Michael');
			
			$this->assertIsArray($reputation1);
			$this->assertIsArray($reputation2);
			
			$this->assertCount(3, $reputation1);
			$this->assertCount(4, $reputation2);
			
			foreach ($reputation1 as $name => $reputation) {
				$this->assertIsString($name);
				$this->assertIsInt($reputation);
				$this->assertGreaterThanOrEqual(50, $reputation);
				$this->assertLessThanOrEqual(100, $reputation);
			}
			
			foreach ($reputation2 as $name => $reputation) {
				$this->assertIsString($name);
				$this->assertIsInt($reputation);
				$this->assertGreaterThanOrEqual(50, $reputation);
				$this->assertLessThanOrEqual(100, $reputation);
			}
		}
		
		// Тесты для задания 2
		public function test_find_value() {
			$array = ['name' => 'John', 'age' => 30];
			$key = 'name';
			
			$result = find_value($array, $key);
			
			$this->assertEquals('John', $result);
		}

		// Тесты для задания 3
		public function test_glossary() {
			$result = glossary('яблоко');
			$this->assertEquals('яблоко - плод яблони, имеющий много сортов и разновидностей, обладающий приятным вкусом и ароматом', $result, );

			$result = glossary('тест');
			$this->assertNull($result);
		}
		
		// Тесты для задания 4
		public function test_bowl_rice_and_a_cat_girl()
		{
			$reputation = ['Вася' => 120, 'Петя' => 90, 'Коля' => 105];
			$expected = ['Вася' => 100, 'Петя' => 90, 'Коля' => 100];
			$result = bowl_rice_and_a_cat_girl($reputation);
			$this->assertEquals($expected, $result);
		}
		
		// Тесты для задания 5
		public function test_is_master() {
			$reputation = ['Вася' => 100, 'Петя' => 90, 'Коля' => 25];
			$expected = "Junior";
			$result = is_master($reputation, 'Коля');
			$this->assertEquals($expected, $result);
		}
		
		// Тесты для задания 6
		public function test_rating()
		{
			$masters = ['John' => 50, 'Alice' => 70];
			rating($masters, 'John');
			$this->assertEquals(51, $masters['John']);
		}
		
		// Тесты для задания 7
		public function test_ban_hammer()
		{
			$masters = ['John' => -5, 'Alice' => 10, 'Bob' => -15];
			$nameToRemove = 'John';
			ban_hammer($masters, $nameToRemove);
			$this->assertArrayNotHasKey($nameToRemove, $masters);
		}
		
		// Тесты для задания 8
		public function test_file_directory_name()
		{
			$fullFilePath = '/path/to/directory/filename.txt';
			$expectedFileName = 'filename.txt';
			$expectedFolderName = '/path/to/directory';
			
			[$fileName, $folderName] = file_directory_name($fullFilePath);
			
			$this->assertEquals($expectedFileName, $fileName);
			$this->assertEquals($expectedFolderName, $folderName);
		}
		// Тесты для задания 9
		public function test_max_reputation() {
			$masters = [
				'Vanya' => 50,
				'Kastet' => 75,
				'Chinya' => 100,
				'Misha' => 30,
				'Vasya' => 120,
			];
			$expected = [
				'Vasya' => 120,
				'Chinya' => 100,
				'Kastet' => 75,
			];
			$this->assertEquals($expected, max_reputation($masters));
		}
		// Тесты для задания 10
		public function test_translate_day_week()
		{
			$this->assertEquals("В Понедельник я пошёл на тренировку, в Пятница я тоже пошёл на тренировку, в Воскресенье я тоже пошёл на тренировку",
				translate_day_week("В Monday я пошёл на тренировку, в Friday я тоже пошёл на тренировку, в Sunday я тоже пошёл на тренировку"));
		}
		
		// Тесты для задания 11
		public function test_season()
		{
			$this->assertEquals('лето', season('Июнь'));
			$this->assertEquals('осень', season('Октябрь'));
			$this->assertEquals('зима', season('Декабрь'));
			$this->assertEquals('весна', season('Март'));
		}
		
		// Тесты для задания 12
		public function test_basket()
		{
			$this->assertEquals(9999999, basket(28));
			$this->assertEquals(450, basket(51));
		}
	}