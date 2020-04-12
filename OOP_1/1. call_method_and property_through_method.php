<?php
	class Car
	{
		public $a=1;

		function getSpeed()
		{
		echo "Швидкість ".$this->a;
		}
	}

	$car1 = new Car();
	$car1->getSpeed();
//----------------------------------
	class Car
	{
		public $a=1;
		function getSpeed()
		{
		$this->foo(); 
		}
		
		function foo()
		{
		echo "Швидкість ".$this->a;
		} 
	}

$car1 = new Car();
$car1->getSpeed();
?>
