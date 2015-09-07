<?php
//----------------abstract---------------
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

//------------interface------------------
	interface Db{
		function db_conn();
		function db_open();
		function db_query();
		function db_close();
	}

	class B implements Db{
		function db_conn(){}
		function db_open(){}
		function db_query(){}
		function db_close(){}
	}
	//інтерфейс - це той самий самий абстрактний клас, в якому всі методі є абстрактні
	//ми записуємо через interface і пропускаємо abstruct в методах

	//наслідування відбувається з допомогою ключогового слова - implements
?>