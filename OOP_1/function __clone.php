<?php
	class vvv
	{
		public $eeee=1;

		function __clone()
		{
			$this->eee=2;
		}
	}
	
		$a = new vvv();
		$a->eee = 3;
		$a2 = clone $a;
		
		echo $a->eee;
		echo $a2->eee;
?>