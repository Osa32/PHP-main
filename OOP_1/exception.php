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

//-------------------old version---------------------------------

	class User
	{
		public $name;
		public $login;
		public $password;

		function __construct($a="",$b="",$c="")
		//вставляєм по замовчуванню пусті строки
		//якщо нічого не прийде, тоді буде пуста строка
		{
			try
			{
				if ($a=="" or $b=="" or $c=="")
					throw new Exception("<br>Введені не всі дані");
				$this->name=$a;
				$this->login=$b;
				$this->password=$c;
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		}

		function showInfo()
		{
			echo "<p>Name: ".$this->name."<br>"."Login: ".$this->login."<br>"."Password: ".$this->password."<br>";
		}
	}

	class SuperUser extends User
	{
		public $role;

		function __construct($a,$b,$c,$d)
		{
			parent:: __construct($a,$b,$c);
			$this->role=$d;
		}

		function showInfo()
		{
			parent:: showInfo();
			echo "Role: ".$this->role."<br>";
		}
	}

	$aaaa1 = new User(123,456,789);
	echo $aaaa1->showInfo();

	$aaaa2 = new User(456,789);
	echo $aaaa2->showInfo();

	$aaaa3 = new User(123,456,789);
	echo $aaaa3->showInfo();

	$aaaa4 = new SuperUser(123,456,789999,"admin");
	echo $aaaa4->showInfo();

//-----------------new version----------------------------	

	// class nameExc extends Exception
	// {
	// 	function __construct($msg)
	// 		{
	// 			echo $msg .= " name!";
	// 		}
	// }

	// class loginExc extends Exception
	// {
	// 	function __construct($msg)
	// 		{
	// 			echo $msg .= " login!";
	// 		}
	// }

	// class passExc extends Exception
	// {
	// 	function __construct($msg)
	// 		{
	// 			echo $msg .= " password!";
	// 		}
	// }

	// class User
	// {
	// 	public $name;
	// 	public $login;
	// 	public $password;

	// 	function __construct($a="",$b="",$c="")
	// 	{
	// 		try
	// 		{
	// 			if ($a=="")
	// 				throw new nameExc ("<br>Введіть");
	// 				$this->name=$a;
	// 			if ($b=="")
	// 				throw new loginExc ("<br>Введіть");
	// 				$this->login=$b;
	// 			if ($c=="")
	// 				throw new passExc ("<br>Введіть");
	// 				$this->password=$c;
	// 		}
	// 		catch(nameExc $e)
	// 		{
	// 			echo $e->getMessage();
	// 		}
	// 		catch(loginExc $e)
	// 		{
	// 			echo $e->getMessage();
	// 		}
	// 		catch(passExc $e)
	// 		{
	// 			echo $e->getMessage();
	// 		}
	// 	}

	// 	function showInfo()
	// 	{
	// 		echo "<p>Name: ".$this->name."<br>"."Login: ".$this->login."<br>"."Password: ".$this->password."<br>";
	// 	}
	// }

	// class SuperUser extends User
	// {
	// 	public $role;

	// 	function __construct($a,$b,$c,$d)
	// 	{
	// 		parent:: __construct($a,$b,$c);
	// 		$this->role=$d;
	// 	}

	// 	function showInfo()
	// 	{
	// 		parent:: showInfo();
	// 		echo "Role: ".$this->role."<br>";
	// 	}
	// }

	// $aaaa1 = new User(123,456,789);
	// echo $aaaa1->showInfo();

	// $aaaa2 = new User(456,789);
	// echo $aaaa2->showInfo();

	// $aaaa3 = new User(123,456,789);
	// echo $aaaa3->showInfo();

	// $aaaa4 = new SuperUser(123,456,789999,"admin");
	// echo $aaaa4->showInfo();
?>