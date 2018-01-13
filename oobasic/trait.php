<?php 
trait Another {
	public $name;
	public function dance() {
		echo "DANCE! <br>";
	}
}
abstract class Super {
	public function test() {
		echo "TEST! <br>";
	}
}
class Child extends Super {
	use Another;
	public function foo() {
		echo "FOO! <br>";
	}
}
$child = new Child();
$child->name = "Test";
$child->dance();
?>