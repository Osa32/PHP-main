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

		function viewInfo()
		{
		echo "<p>Name: ".$this->name."<br>"."Login: ".$this->login."<br>"."Password: ".$this->password."<br>";
		}
	}

		$aaaa1 = new User(123,456,789);
		echo $aaaa1->viewInfo();
?>