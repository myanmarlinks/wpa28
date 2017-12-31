<?php 
	define("DD", realpath("../"));
	require DD . "/wpa28/functions.php";
	require DD . "/wpa28/database.php";
	require DD . "/app/controller/controllers.php";


	// $students = _db_getAll("students", ['name', 'address']);
	// var_dump($students);
	// die();

	// $data = [
	// 	'name'	=> 'Too Ba',
	// 	'address' => 'Hledan'
	// ];
	// _db_Insert("students", $data);

	// "UPDATE students SET name = 'Goo Goo' WHERE id = 1"
	// $data = [
	// 	'name'		=> 'Goo Goo',
	// 	'address'	=> 'Pazuntaung'
	// ];
	// $status = _db_Update("students", 1, $data);
	// var_dump($status);
	// die();

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
