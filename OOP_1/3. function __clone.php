<?php
	class vvv{
		public $eee=1;
		
		function __construct(){
			$this -> eee = 5;
		}

		function __clone()
		{
			$this->eee=2;
		}
	}
	
		$a = new vvv();
		//$a->eee = 3;
		$a2 = clone $a;
		
		echo $a->eee;
		echo $a2->eee;
		//при виклику клонованих об'єктів - конструктор не викликається
?>
