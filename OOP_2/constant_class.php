<?php
	class Human {
		const HANDS = 2;

		function printHands(){
			echo "<br>".self::HANDS;
		}
	}
	echo "К-ть рук - ".Human::HANDS;
	$a = new Human();
	$a->printHands();

	//константу класу буде видно тільки із цього класу
	//і її неможливо буде змінити
?>