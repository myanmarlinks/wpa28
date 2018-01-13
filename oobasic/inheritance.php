<?php 
abstract class Animal {
	private $name;
	public function __construct($name) {
		$this->name = $name;
	}
	public function eat() {
		echo "EAT! <br>";
	}
}
$animal = new Animal("Test");
class Dog extends Animal {
	private $color;
	public function __construct($name, $color) {
		parent::__construct($name);
		$this->color = $color;
	}
	public function bark() {
		echo "BARK! <br>";
	}
}
class Cat extends Animal {
	private $foo;
	public function __construct($name, $foo) {
		parent::__construct($name);
		$this->foo = $foo;
	}
	public function meow() {
		echo "MEOW!<br>";
	}
}

$dog = new Dog("Puppy", "RED");
$cat = new Cat("Cat", "BAR");
$dog->bark();
$cat->meow(); 


 ?>