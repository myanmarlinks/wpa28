<?php 

// Separation of Concern
class Dog {
	public $color;
	private $type; 
	public static $name;
	// Magic Method
	public function __construct($type) {
		$this->type = $type;
	}
	public function __destruct() {
		echo "Object D!";
	}
	public static function eat() {
		echo "EAT!";
	}
	public function bark() {
		echo "Woof!";
	}
}
Dog::$name = "White";
echo Dog::$name;
Dog::eat();
$dog = new Dog("puppy");
$dog->color = "White";
echo $dog->color . "<br/>";
$dog->bark();
unset($dog);
$dog1 = new Dog("foo");
$dog1->color = "Green";
echo $dog1->color . "<br>";
$dog1->bark();
?>