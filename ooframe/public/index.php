<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

$students = DB::table("students")->get();
$student = DB::table("students")->where("id", 1)->get();
foreach($students as $stu) {
	var_dump($stu->name);
}
// $classes = DB::table("classes")->get();

 ?>