<?php
	function __autoload($name){
	//якщо пхп не може знайти будь-якого класу
	//то він, перед тим, як видати відповідну помилку
	//шукає функцію __autoload, передаючи туди
	//ім'я цього незнайденого класу як параметр'
		echo "Шукаєм клас $name";
		exit; //тут потрібно додати вихід із функції, бо скрипт продовжить шукати клас, його не знайде
		      // і поверне помилку
	}
	$o = new A();

	//-----також можна інклудити файли в автолоаді

	function __autoload($class) {
		require_once $class.".php";
	}

	$human = new index2;
	$human->qqq();

	// при цьому у файлі index2.php розмістимо код
	class index2 {
	function qqq () {
		echo "kurva index2!";
	// результат виконання скрипта у файлі index.php буде - kurva index2!

	//тут діє наступний алгоритм, є звернення до неіснуючого класу
	//але перед тим як видати помилку, пхп звертається до autoload.
	//Там він бачить проінклудений файл, в якому є описаний цей клас
	//відповідно клас фактично виходить оголошеним!
		
	//при такому підході назва файлу і класу в ньому мають бути однаковими
		
	// ---------------------
	// наприклад якщо наш файл знаходиться на в поточній папці, можна робити наступну перевірку
	
	function __autoload($class) {
		if (file_exists($class.".php")) {
			require_once $class.".php";
		}else{
			require_once "core/".$class.".php";
		}
	}

	$human = new index2;
	$human->qqq();
		
	// ---------------------
	// використання spl_autoload_register. Приймає один основний аргумент - назву ф-ції для автолоаду
	// нижче код виконається успішно
		
	function myautoload($class) {
		if (file_exists($class.".php")) {
			require_once $class.".php";
		}else{
			require_once "core/".$class.".php";
		}
	}

	spl_autoload_register('myautoload');

	$human = new index2;
	$human->qqq();

	// ---------------------
	// використання spl_autoload_register із об'єктами. Приймає масив аргументів, де перший, це є назва класу
	// а другий аргумент це назва методу. Метод при цьому має бути чомусь статичним

	spl_autoload_register(['Autoloadclass', 'myautoload']);

	$human = new index2;
	$human->qqq();

	class Autoloadclass{

	public static function myautoload($class) {
		if (file_exists($class.".php")) {
			require_once $class.".php";
		}else{
			require_once "core/".$class.".php";
			}
		}
	}
