<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

$students = DB::table("students")->get();
$classes = DB::table("classes")->get();

 ?>