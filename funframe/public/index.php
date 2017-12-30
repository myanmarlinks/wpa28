<?php 
	define("DD", realpath("../"));
	require DD . "/wpa28/functions.php";
	require DD . "/wpa28/database.php";
	require DD . "/app/controller/controllers.php";
	
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
