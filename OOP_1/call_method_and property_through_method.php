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
//----------------------------------
class Car
{
  public $a = 2;

  function Osa2 ($b) {
    return "Швидкість ".$this->a." + ".$b;
  }
}

$car1 = new Car;
echo $car1->Osa2(300);
?>
