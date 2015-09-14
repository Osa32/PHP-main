<?php
	class Human {
		const HANDS = 2;

		function printHands(){
			echo "<br>".self::HANDS;
			//звернення до константи в класі
		}
	}
	echo "К-ть рук - ".Human::HANDS;
	//звернення до константи поза класом
	$a = new Human();
	$a->printHands();

	//константу класу буде видно тільки із цього класу
	//і її неможливо буде змінити
?>