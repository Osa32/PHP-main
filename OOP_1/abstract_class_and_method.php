<?php
//----------------abstract---------------
	abstract class Car {
	//об'єкт не може містити екземпляр абстрактного класу
		public $petrol;
		function startEngine(){
			echo "Двигун завівся";
		}
		//оголосили публічний метод, який буде доступний через наслідуваний клас
		abstract function stopEngine();
		//оголосили абстрактний метод
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
	//абстрактиний клас не може бути використаний для створення об'єкту (через new), його можна лише унаслідувати
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

	class A extends B implements C,D,E{}

	//також зауважимо, що клас може наслідуватись лише від одного класу,
	//але від багатьох інтерфейсів, ну і також можливе сумісне наслідування

	//при використанні інтерфейсів, щоб уникнути еррору - всі методи повинні бути перевизначені
?>
