<?php
	class User
	{
		public $name;
		public $login;
		public $password;

		function __construct($a,$b,$c)
		{
			$this->name=$a;
			$this->login=$b;
			$this->password=$c;
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

	$aaaa2 = new User(123,456,789);
	echo $aaaa2->showInfo();

	$aaaa3 = new User(123,456,789);
	echo $aaaa3->showInfo();

	$aaaa4 = new SuperUser(123,456,789999,"admin");
	echo $aaaa4->showInfo();
?>