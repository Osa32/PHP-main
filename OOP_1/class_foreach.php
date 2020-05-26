<?php
	class Var1
	{
		public $a1;
		public $a2;

		function __construct($b1,$b2)
		{
			$this->a1=$b1;
			$this->a2=$b2;
		}
	}

	$aaa = new Var1("Ivan","Petrov");
	foreach ($aaa as $key => $value) {
		echo $key." - ".$value."<br>";
	}
?>