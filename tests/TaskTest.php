<?php
	require_once "tasks/Task.php";
	
	use PHPUnit\Framework\TestCase;
	
	class TaskTest extends TestCase
	{
		// Тесты для Задачи № 1
		function test_six_digit_format()
		{
			$this->assertEquals("000022", six_digit_format(22));
			$this->assertEquals("003553", six_digit_format(3553));
			$this->assertEquals("012213", six_digit_format(12213));
		}
		
		// Тесты для Задачи № 2
		function test_clock()
		{
			$this->assertEquals("05:41:30", clock(20490));
		}
		
		// Тесты для Задачи № 3
		function test_full_name()
		{
			$this->assertEquals("Пупкин В.О.",
				full_name("Виталий", "Пупкин", "Олегович"));
		}
		
		//  Тесты для Задачи № 4
		function test_short_password()
		{
			ob_start();
			short_password("lol_kek");
			$output = ob_get_clean();
			$this->assertEquals("Слишком короткий пароль", $output);
		}
		
		// Тесты для Задачи № 5
		function test_password_gap()
		{
			ob_start();
			password_gap("123 fsdf");
			$output = ob_get_clean();
			$this->assertEquals("Пароль содержит пробелы", $output);
		}
		
		// Тесты для задачи № 6
		function test_comparison_letters()
		{
			$this->assertTrue(comparison_letters("Hello world", "Goodbye мир994"));
			$this->assertFalse(comparison_letters("Tratatatatatataфы", " Tests 775223343dfasdfasdf"));
		}
		
		// Тесты для задачи № 7
		function test_more_details()
		{
			$test_text_1 = <<<Body
			У Лукоморья дуб срубили
			Кота на мясо порубили
			Русалку в бочку посадили
			И написали: "Огурцы".
			Там на неведомых дорожках
			Следы разбитых жигулей,
			Там мерседес на курьих ножках
			Стоит без окон без дверей.
			Там царь Додон у короля
			Десятку спер по два рубля.
			Там тридцать три богатыря
			В помойке ищут три рубля.
			Body;
			$test_text_result = <<<Body
			У Лукоморья дуб срубили
			Кота на мясо порубили
			Ру<a href=#> Подробнее</a>
			Body;
			
			$this->assertEquals($test_text_result, more_details($test_text_1));
		}
		
		// Тесты для задачи № 8
		function test_reduction() {
			$this->assertEquals("Обор-ть",reduction("Обороноспособность"));
			$this->assertEquals("Слон",reduction("Слон"));
		}
		
		// Тесты для задачи № 9
		function test_occurrence_character()
		{
			$this->assertEquals(4, occurrence_character("helllo world", "l"));
			$this->assertEquals(3, occurrence_character("gggert", "g"));
		}
		
		// Тесты для задачи № 10
		function test_capslock() {
			$this->assertEquals("Добро пожаловать!", capslock("qwerty123"));
			$this->assertEquals("Возможно нажата клавиша Caps Lock...", capslock("QWERTY123"));
			$this->assertEquals("Password uncorrected", capslock("Lalala"));
		}
		
		// Тесты для задачи № 11
		function test_case_insensitive_occurrence_character()
		{
			$this->assertEquals(4, case_insensitive_occurrence_character("helLlo worLd", "l"));
			$this->assertEquals(3, case_insensitive_occurrence_character("gGGert", "g"));
		}
		
		// Тесты для задачи 12
		function test_italics() {
			ob_start();
			italics("hello world hello cat", "heLLo");
			$output = ob_get_clean();
			$this->assertEquals("hello world hello cat". PHP_EOL .
			 							"<i>heLLo</i> world <i>heLLo</i> cat", $output);
		}
		// Тесты для задачи 13
		function test_remove_tag() {
			$this->assertEquals("Hello world", remove_tag("<h1>Hello world</h1>"));
		}
		
		// Тесты для задачи 14
		function test_remove_comments() {
			$input1 = "Some /* comment */ text";
			$expected1 = "Some  text";
			$this->assertEquals($expected1, remove_comments($input1));
			
			$input2 = "/* Comment 1 */ Some /* Comment 2 */ text /* Comment 3 */";
			$expected2 = " Some  text ";
			$this->assertEquals($expected2, remove_comments($input2));
			
			$input3 = "";
			$expected3 = "";
			$this->assertEquals($expected3, remove_comments($input3));
			
			$input4 = "No comments here";
			$expected4 = "No comments here";
			$this->assertEquals($expected4, remove_comments($input4));
			
			$input5 = "Some /* comment text";
			$expected5 = "Some ";
			$this->assertEquals($expected5, remove_comments($input5));
		}
		
		// Тесты для задачи 15
		function test_highlight_keyword() {
			$text1 = "This is the first sentence. The second sentence contains the keyword 'keyword'. The third sentence.";
			$keyword1 = "keyword";
			$expected1 = " The second sentence contains the <strong>keyword</strong> '<strong>keyword</strong>'";
			$this->assertEquals($expected1, highlight_keyword($text1, $keyword1));
			
			$text2 = "First sentence. The second sentence contains 'key'. Third sentence with no keyword.";
			$keyword2 = "key";
			$expected2 = " The second sentence contains '<strong>key</strong>'";
			$this->assertEquals($expected2, highlight_keyword($text2, $keyword2));

			$text3 = "This sentence contains the word 'key'. Second sentence contains 'key'. Third sentence also has 'key'.";
			$keyword3 = "key";
			$expected3 = "This sentence contains the word '<strong>key</strong>'";
			$this->assertEquals($expected3, highlight_keyword($text3, $keyword3));
		}
		
	}