<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

// $students = DB::table("students")->get();
// $student = DB::table("students")->where("id", 1)->get();
// foreach($students as $stu) {
// 	var_dump($stu->name);
// }
// $classes = DB::table("classes")->get();

$students = HhDB::table("students")->get();
$students_1 = HhDB::table("students")->select("id", "name")->get();
var_dump($students);
var_dump($students_1);

 ?>