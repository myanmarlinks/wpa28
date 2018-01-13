<?php 
class MethodChain {
	public function eat() {
		echo "EAT!<br>";
		return $this;
	}
	public function sleep() {
		echo "SLEEP!<br>";
		return $this;	
	}
	public function code() {
		echo "CODE!<br>";
		return $this;	
	}
	public function repeat() {
		echo "REPEAT!<br>";
		return $this;	
	}
 }
 $method = new MethodChain();
 $method->eat()->sleep()->code()->repeat();
 $method->sleep()->eat();
 $method->eat()->sleep()->repeat();
?>