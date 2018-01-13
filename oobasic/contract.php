<?php 
interface DogInterface {
	public function bar();
	public function eat();
}
interface BullDogInterface {
	public function bite();
}
class Dog implements DogInterface, BullDogInterface {
	public function bar() {
		echo "BAR! <br>";
	}
	public function eat() {
		echo "EAT! <br>";
	}
	public function bite() {
		echo "BITE! <br>";
	}
}
$dog = new Dog();
$dog->eat();
 ?>