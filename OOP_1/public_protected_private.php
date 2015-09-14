<?php
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
	$o1 = new A();
	//$o1->_a;
	//при зверненні через батьківський клас, видасть помилку
	//про недоступність protected property
	//$o1->_b;
	//при зверненні через батьківський клас, видасть помилку
	//про недоступність private property
	//$o1->foo();
	//виклик protected i private буде доступний через метод
	//батьківського класу

	class B extends A
	{
		function bar()
		{
			echo $this->_a;
			echo $this->_b;
		}
	}
	$o2 = new B();
	//$o2->_a;
	//при зверненні через успадкований клас, видасть помилку
	//про недоступність protected property
	//$o2->_b;
	//при зверненні через успадкований клас, властивість private
	//property буде невидимою
	//$o2->bar();
	//буде доступний лише виклик protected через метод успадкованого 
	//класу, private буде невидимий
?>