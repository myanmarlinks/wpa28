<?php 
	define("DD", realpath("../"));
	require DD . "/wpa28/functions.php";
	require DD . "/wpa28/database.php";
	require DD . "/app/controller/controllers.php";

	$data = [
		'name'	=> 'Too Ba',
		'address' => 'Hledan'
	];
	_db_Insert("students", $data);
	// delete from students where id = 1
	// INSERT INTO students (name, address)  VALUES ("Ba Ba", "Hledan")
	// _db_DeleteById("students", 1);
	// die();
	
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
