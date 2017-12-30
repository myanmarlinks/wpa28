<?php 

function _db_connect() {
	$servername = _get_config("database.server");
	$username = _get_config("database.username");
	$password = _get_config("database.password");
	$dbname = _get_config("database.dbname");
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}


function _db_getById(string $table_name, int $id) {

	$conn = _db_connect();
	
	$sql = "SELECT * FROM " . $table_name . " WHERE id = " . $id;
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return mysqli_fetch_assoc($result);

}

function _db_getAll(string $table_name)  {
	$conn = _db_connect();
	$sql = "SELECT * FROM " . $table_name;
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return mysqli_fetch_all($result);
}

 ?>