<?php 

define("DD", realpath("../"));

require DD . "/vendor/autoload.php";
use Wpa28\App\Application;

class Test {
	public function index() {
		var_dump("INDEX");
	}
}
class Another {
	public function index() {
		var_dump("ANOTHER");
	}
}
$status = Application::add(new Test());
if($status == null) {
	var_dump("First Set!");
}
Application::add(new Another());
$test = Application::get("test");
$test->index();
$another = Application::get("another");
$another->index();

Application::remove("another");
$aan = Application::get("another");
$aan->index();




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