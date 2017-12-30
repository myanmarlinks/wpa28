<?php 
	define("DD", realpath("../"));
	require DD . "/wpa28/functions.php";
	require DD . "/wpa28/database.php";
	require DD . "/app/controller/controllers.php";

	$student = _db_getById("students", 1);
	$students = _db_getAll("students");
	var_dump($student);
	var_dump($students);
	die();
	
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = "home";
	}

	$controller = ucfirst($page) . "Controller";
	if(function_exists($controller)) {
		call_user_func($controller);
	} else {
		echo "404";
	}


	
	










 ?>
