<?php 
// Closure
// Anonymous Function

$var = function($test) {
	echo $test;
};
var_dump( gettype($var) );
$var("Hello");
$var("World");
 ?>