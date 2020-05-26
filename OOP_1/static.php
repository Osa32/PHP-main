<?php
	class CookieLover {
		static $loversCount = 55;
		function __construct(){
			++self::$loversCount."<br>";
		}
		static function welcome(){
			echo "Це статичний метод";
		}
	}

	$a = new CookieLover();
	$b = new CookieLover();
	$c = new CookieLover();

	echo "Поточний баланс - ".CookieLover::$loversCount."<br>";
	//до статичного методу/властивості можемо звертатись і не через об'єкт.

	echo CookieLover::welcome();
	//він належить тільки класу, а не об'єкту. Це метод, який є загальний для всіх
	//так само, як константа - це властивість для всіх
?>