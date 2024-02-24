<?php
	require_once 'tasks\Task.php';
	
	use PHPUnit\Framework\TestCase;
	
	class TaskTest extends TestCase
	{
		
		// Тест для задачи 1
		public function test_odd()
		{
			
			$this->assertEquals(1, odd(2));
			$this->assertEquals(1, odd(1231244));
			$this->assertEquals(1, odd(2354228));
			
			$this->assertEquals(0, odd(1));
			$this->assertEquals(0, odd(1234123445));
			$this->assertEquals(0, odd(4532457));
		}
		
		// Тест для задачи 2
		public function test_chess_rock()
		{
			
			$this->assertTrue(chess_rock("e1", "e2"));
			$this->assertTrue(chess_rock("h1", "h8"));
			
			$this->assertFalse(chess_rock("c3", "f6"));
			$this->assertFalse(chess_rock("e4", "b7"));
		}
		
		// Тест для задачи 3
		public function test_chess_king()
		{
			
			$this->assertTrue(chess_king("e1", "e2"));
			$this->assertTrue(chess_king("d1", "c2"));
			$this->assertTrue(chess_king("h1", "h2"));
			
			$this->assertFalse(chess_king("h1", "h3"));
			$this->assertFalse(chess_king("h3", "f3"));
			$this->assertFalse(chess_king("b7", "b5"));
		}
		
		// Тесты для задачи 4
		function test_is_quest()
		{
			ob_start();
			is_quest(true);
			$output = ob_get_clean();
			$this->assertEquals("Пожалуйста авторизуйтесь", $output);
			
			ob_start();
			is_quest(false);
			$empty_output = ob_get_clean();
			$this->assertEmpty($empty_output);
		}
		
		// Тесты для задачи 5
		function test_simple_abs()
		{
			$this->assertEquals(2243241, simple_abs(2243241));
			$this->assertEquals(2243241, simple_abs(-2243241));
			$this->assertEquals(14231.52435, simple_abs(14231.52435));
			$this->assertEquals(5345.41241, simple_abs(-5345.41241));
		}
		
		// Тесты для задачи 6
		function test_maximum()
		{
			$this->assertEquals(24645, maximum(24645, 4123));
			$this->assertEquals(-442.421, maximum(-8898, -442.421));
			$this->assertEquals(228322, maximum(228322, 228321.5));
		}
		
		// Тесты для задачи 7
		function test_chess_black_or_white()
		{
			$this->assertEquals("Черное", chess_black_or_white("a1"));
			$this->assertEquals("Черное", chess_black_or_white("d8"));
			$this->assertEquals("Черное", chess_black_or_white("h8"));
			
			$this->assertEquals("Белое", chess_black_or_white("h3"));
			$this->assertEquals("Белое", chess_black_or_white("h7"));
			$this->assertEquals("Белое", chess_black_or_white("c6"));
		}
		
		//Тесты для задачи 8
		function test_all_even_number()
		{
			$this->assertTrue(all_even_number(22, 36, 44));
			$this->assertTrue(all_even_number(12, 8, 64));
			$this->assertTrue(all_even_number(2, 4, 1231234412));
			
			$this->assertFalse(all_even_number(756756, 756555, 7656567));
			$this->assertFalse(all_even_number(7657567, 8567567, 876867));
		}
		
		//Тесты для задачи 9
		function test_some_even_number()
		{
			$this->assertTrue(some_even_number(22, 36, 44));
			$this->assertTrue(some_even_number(2, 31, 3421));
			$this->assertTrue(some_even_number(1, 3, 554));
			
			$this->assertFalse(some_even_number(23453442534545, 523452345, 6543634567));
			$this->assertFalse(some_even_number(41231245, 6435634567, 87568567865));
			$this->assertFalse(some_even_number(1, 3, 7));
		}
		
		// Тесты для задачи 10
		function test_weekend()
		{
			$this->assertTrue(weekend(6));
			$this->assertTrue(weekend(26));
			$this->assertTrue(weekend(27));
			
			
			$this->assertFalse(weekend(21));
			$this->assertFalse(weekend(23));
		}
		
		// Тесты для задачи 11
		function test_is_triangle()
		{
			$this->assertTrue(is_triangle(22, 11, 32));
			$this->assertTrue(is_triangle(3, 4, 5));
			$this->assertTrue(is_triangle(6, 8, 10));
			$this->assertTrue(is_triangle(9, 10, 12));
			
			$this->assertFalse(is_triangle(22, 11, 33));
			$this->assertFalse(is_triangle(7, 14, 5));
			$this->assertFalse(is_triangle(43, 1111, 543));
			$this->assertFalse(is_triangle(1, 5, 10));
		}
		
		// Тесты для задачи 12
		function test_leap_year()
		{
			$this->assertEquals("YES", leap_year(1896));
			$this->assertEquals("YES", leap_year(444));
			$this->assertEquals("YES", leap_year(1904));
			$this->assertEquals("YES", leap_year(1916));
			$this->assertEquals("YES", leap_year(2000));
			$this->assertEquals("YES", leap_year(2012));
			$this->assertEquals("YES", leap_year(1932));
			
			$this->assertEquals("NO", leap_year(1333));
			$this->assertEquals("NO", leap_year(1900));
			$this->assertEquals("NO", leap_year(1800));
			$this->assertEquals("NO", leap_year(1700));
			$this->assertEquals("NO", leap_year(2013));
			$this->assertEquals("NO", leap_year(2019));
			$this->assertEquals("NO", leap_year(731));
		}
		
		// Тесты для задачи 13
		function test_sign_number()
		{
			$this->assertEquals(1, sign_number(12312));
			$this->assertEquals(1, sign_number(32523));
			$this->assertEquals(1, sign_number(234));
			$this->assertEquals(1, sign_number(12312));
			$this->assertEquals(1, sign_number(66574));
			
			$this->assertEquals(0, sign_number(0));
			
			$this->assertEquals(-1, sign_number(-234));
			$this->assertEquals(-1, sign_number(-123123));
			$this->assertEquals(-1, sign_number(-6354));
			$this->assertEquals(-1, sign_number(-9999));
			$this->assertEquals(-1, sign_number(-56234523));
		}
		
		// Тесты для задачи 14
		function test_maximum_segment()
		{
			$this->assertEquals(10, maximum_segment(5, 7, 10));
			$this->assertEquals(523, maximum_segment(8, 523, 3));
			$this->assertEquals(24, maximum_segment(23, 7, 24));
			$this->assertEquals(65, maximum_segment(65, 7, 10));
			$this->assertEquals(345, maximum_segment(1, 34, 345));
		}
		
		// Тесты для задачи 15
		function test_temperature_recommendations()
		{
			ob_start();
			temperature_recommendations(-45);
			$output = ob_end_clean();
			$this->assertEquals("Оставайтесь дома", $output);
			
			ob_start();
			temperature_recommendations(-50);
			$output = ob_end_clean();
			$this->assertEquals("Оставайтесь дома", $output);
			
			ob_start();
			temperature_recommendations(-500);
			$output = ob_end_clean();
			$this->assertEquals("Оставайтесь дома", $output);
			
			ob_start();
			temperature_recommendations(-25);
			$output = ob_end_clean();
			$this->assertEquals("Сегодня холодно", $output);
			
			ob_start();
			temperature_recommendations(-15);
			$output = ob_end_clean();
			$this->assertEquals("Сегодня холодно", $output);
			
			ob_start();
			temperature_recommendations(0);
			$output = ob_end_clean();
			$this->assertEquals("Не холодно!", $output);
			
			ob_start();
			temperature_recommendations(3);
			$output = ob_end_clean();
			$this->assertEquals("Не холодно!", $output);
			
			ob_start();
			temperature_recommendations(10);
			$output = ob_end_clean();
			$this->assertEquals("Тепло", $output);
			
			ob_start();
			temperature_recommendations(13);
			$output = ob_end_clean();
			$this->assertEquals("Тепло", $output);
			
			ob_start();
			temperature_recommendations(17);
			$output = ob_end_clean();
			$this->assertEquals("Очень тепло", $output);
			
			ob_start();
			temperature_recommendations(20);
			$output = ob_end_clean();
			$this->assertEquals("Очень тепло", $output);
			
			ob_start();
			temperature_recommendations(27);
			$output = ob_end_clean();
			$this->assertEquals("Жарко", $output);
			
			ob_start();
			temperature_recommendations(30);
			$output = ob_end_clean();
			$this->assertEquals("Жарко", $output);
			
			ob_start();
			temperature_recommendations(37);
			$output = ob_end_clean();
			$this->assertEquals("Пекло", $output);
			
			ob_start();
			temperature_recommendations(2234);
			$output = ob_end_clean();
			$this->assertEquals("Пекло", $output);
		}
		
		// Тесты для задачи 16
		function test_diary() {
			$this->assertTrue(diary("10:19:30", "22:25:29", "21:15:10", "23:10:15"));
			$this->assertTrue(diary("15:20:22", "21:10:15", "21:10:15", "23:15:20"));
			$this->assertTrue(diary("8:15:22", "11:35:41", "6:51:33", "12:00:00"));
			$this->assertTrue(diary("1:12:35", "5:30:00", "1:13:00", "4:30:24"));
			$this->assertTrue(diary("1:13:00", "4:30:24", "1:12:35", "5:30:00" ));
			
			$this->assertFalse(diary("10:19:30", "22:25:29", "22:25:30", "23:10:15"));
			$this->assertFalse(diary("5:14:53", "7:25:11", "10:24:30", "15:10:45"));
			$this->assertFalse(diary("23:30:35", "24:00:00", "3:15:25", "7:25:10"));
			$this->assertFalse(diary("8:17:30", "14:30:00", "15:00:00", "18:00:00"));
		}
		
		// Тесты для задачи 17
		function test_chocolate() {
			$this->assertTrue(chocolate(21, 4, 8));
			$this->assertTrue(chocolate(21, 4, 21));
			$this->assertTrue(chocolate(21, 4, 42));
			$this->assertTrue(chocolate(21, 4, 84));
			$this->assertTrue(chocolate(27, 5, 10));
			$this->assertTrue(chocolate(27, 5, 27));
			$this->assertTrue(chocolate(27, 5, 81));
			$this->assertTrue(chocolate(27, 5, 135));
			
			$this->assertFalse(chocolate(31, 7, 8));
			$this->assertFalse(chocolate(31, 7, 64));
			$this->assertFalse(chocolate(31, 7, 120));
			$this->assertFalse(chocolate(31, 7, 218));
			$this->assertFalse(chocolate(38, 10, 12));
			$this->assertFalse(chocolate(38, 10, 39));
			$this->assertFalse(chocolate(38, 10, 55));
			$this->assertFalse(chocolate(38, 10, 381));
		}

		// Тесты для задачи 18
		function test_delivery() {
			$this->assertEquals(15, delivery(6, 9));
			$this->assertEquals(14, delivery(10, 2));
			$this->assertEquals(21, delivery(16, 3));
			$this->assertEquals(28, delivery(12, 14));
		}
		
		// Тесты для задачи 19
		public function test_what_time_now() {
			$this->assertEquals("час", what_time_now(1));
			$this->assertEquals("часа", what_time_now(2));
			$this->assertEquals("часов", what_time_now(12));
			$this->assertEquals("час", what_time_now(21));
			$this->assertEquals("часа", what_time_now(122));
			$this->assertEquals("часов", what_time_now(25));
		}
	}