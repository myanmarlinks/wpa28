<?php 
/* Magic Method */
class TestClass {
	private $name;
	private $data = [];
	public function __construct($name) {
		$this->name = $name;
	}
	public function __destruct() {
		var_dump("TestClass Destruct!");
	}
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}
	public function __get($key) {
		if(array_key_exists($key, $this->data)) {
			return $this->data[$key];
		} else {
			trigger_error("Array Key does not exist", E_USER_ERROR);
		}
	}
	public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
}

TestClass::dance("wild", 3);

$testClass = new TestClass("Foo");
$testClass->color = "RED";
echo $testClass->color; 
$testClass->eat("burger", 10);












 ?>