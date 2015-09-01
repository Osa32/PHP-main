<?php
	class vvv
	{
		public $eeee=1;
		}
		class aaa extends vvv
		{
		public $eeee=2;
	}
	
	$a = new aaa();
	echo $a->eeee;

	$a = new vvv();
	echo $a->eeee;
?>