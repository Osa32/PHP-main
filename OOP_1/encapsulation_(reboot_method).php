<?php
	class User{
		public $role="admin";
		function foo()
		{
			echo $this->$role=10;
		}
	}

	class SuperUser extends User{
		function foo()
		{
			echo 333;
		}
	}
	$a1 = new SuperUser();
	$a1->foo();
	//в цьому випадку метед перезапишеться
	//і виведе 333
?>