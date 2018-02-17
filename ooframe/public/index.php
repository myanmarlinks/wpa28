<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";

kick();
test();

use Wpa28\App\Application;
use Wpa28\Foo\Application as FooApplication;
use Wpa28\App\Bar;

$app = new Application();
$fapp = new FooApplication();
$bar = new Bar();


// $students = DB::table("students")->get();
// $student = DB::table("students")->where("id", 1)->get();
// foreach($students as $stu) {
// 	var_dump($stu->name);
// }
// $classes = DB::table("classes")->get();

// $students = HhDB::table("students")->get();
// $students_1 = HhDB::table("students")->select("id", "name")->get();

// $student = HDB::table("students")->where(["id" => 1])->get();
// // var_dump($students);
// // var_dump($students_1);
// var_dump($student);

 ?>