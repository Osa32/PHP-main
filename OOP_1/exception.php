<?php

//-------------------main version--------------------------------

try
	{
		$a = 1;
		$b = 0;
		if ($b == 0) throw new Exception ("Ділення на 0!");
		// - там де ми думаєм, що відбудеться помилка, ми генеруємо ексепшн.
		// - отож бачимо, що є new - це означає Exception - це є клас, в конструктор якого
		//ми передаємо значення - Ділення на 0!
		// - з допомогою значення throw - об'єкт класу Exception створюється на льоту 
		//і присвоюється змінній $e, тобто ця змінна вже буде об'єктом. 
		echo $a/$b;
	}
	catch (Exception $e)
		// Exception $e - цей вираз пов'язаний із строгою типізацією і означає,
		//що в змінній $e, може бути лише об'єкт класу Exception.
	{
		echo "Виникла помилка - "
		// а в цьому класі, є автоматом прописані наступні методи:
		$e->getMessage(); //викликаємо повідомлення з конструктора Exception
		$e->getLine(); //рядок з файлу в якому є помилка
		$e->getFile(); //повертає шлях до файлу
	}

//-----------------new version----------------------------	

	class Name extends Exception{
		function __construct($msg){
			echo $msg .= " - name"."<br>";
		}
	}

	class Login extends Exception{
		function __construct($msg){
			echo $msg .= " - login"."<br>";
		}
	}

	class Pass extends Exception{
		function __construct($msg){
			echo $msg .= " - pass"."<br>";
		}
	}

	class User{
		public $name;
		public $login;
		public $pass;

		function __construct($a,$b,$c){
			try{
				if ($a=="") throw new Name("Введенні не всі дані");
				//це означає, що в конструктор класу Name передаємо текстове значення
					$this->name = $a;
				if ($b=="") throw new Login("Введенні не всі дані");
					$this->login = $b;
				if ($c=="") throw new Pass("Не введено третє значення");
					$this->pass = $c;
				}
				catch (Name $w){
					echo $w->getMessage();
				}
				catch (Login $w){
					echo $w->getMessage();
				}
				catch (Pass $w){
					echo $w->getMessage();
				}
		}

		function showInfo(){
			echo $this->name."<br>".$this->login."<br>".$this->pass."<br><hr>";
		}
	}

	class SuperUser extends User{
		public $role;

		function __construct($a,$b,$c,$d){
			parent::__construct($a,$b,$c);
			$this->role = $d;
		}

		function showInfo(){
			parent::showInfo();
			echo $this->role;
		}
	}

	$user1 = new User("івіві","xccxc","ffdfd");
	$user1->showInfo();

	$user2 = new SuperUser("",tar14,12345,пацан);
	$user2->showInfo();
?>
