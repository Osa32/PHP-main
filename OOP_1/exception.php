<?php

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