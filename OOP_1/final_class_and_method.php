<?php
	final class A {
		final function db_conn(){}
	}
	//фінальний - це той клас/метод, який не можна унаслідувати/перегрузити

	class B extends A{
		function db_conn(){}
	}
	//видасть помилку - Class B may not inherit from final class (A)

	$o1 = new B();
?>