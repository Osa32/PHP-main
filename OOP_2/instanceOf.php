<?php
	class Human1 {}
	$a = new Human1();
	if ($a instanceOf Human1)
	// поверне тру, якщо клас Human є предком об'єкту $a
		echo "Human1 є предком для а<br>";

	class Human2 extends Human1{}
	$b = new Human2();
	if ($b instanceOf Human1)
		echo "Human1 є предком для b<br>";

	interface LotsOfMoney{}
	class Human3 implements LotsOfMoney{}
	$c = new Human3();
	if ($c instanceOf LotsOfMoney)
		echo "Human1 є предком для c<br>";

	//визначає, чи є клас для класу/об'єкту предком
	//в даному випадку всюдт буде тру
?>