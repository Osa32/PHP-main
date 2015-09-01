<?php
//----------with properties

	class A
	{
		protected $_a = "Це протектед";
		private $_b = "Це прівате";
		function foo()
		{
			echo $this->_a;
			echo $this->_b;
		}
	}

	class B extends A
	{
		function bar()
		{
			echo $this->_a;
			echo $this->_b;
		}
	}

	$o1 = new B();
	$o1->_a;

//---------with methods

	class A
	{
		protected $_a = "Це протектед<br>";
		private $_b = "Це прівате<br>";
		function foo()
		{
			echo $this->_a;
			echo $this->_b;
		}
	}

	class B extends A
	{
		function bar()
		{
			echo $this->_a;
			echo $this->_b;
		}
	}

	$o1 = new B();
	$o1->foo();
	$o1->bar();
?>