<?php
	abstract class Car {
		public $petrol;
		function startEngine(){
			echo "Двигун завівся";
		}
		abstract function stopEngine();
	}

	class InjectorCar extends Car {
		public function stopEngine(){
		//для виклику абстрактного методу - його потрібно перезавантажити
			echo "Двигун зупинився";
		}
	}

	//$myCar = new Car(); //помилка
	//абстрактний клас може оголошуватись тільки через
	//наслідуваний клас

	$myCar = new InjectorCar();
	$myCar->startEngine();
	$myCar->stopEngine();
?>