<?php
	final class A {
		final function db_conn(){}
	}
	//фінальний - це той клас/метод, який не можна унаслідувати/перегрузити

	class B extends A{
		function db_conn(){}
	}

	$o1 = new B();
?>