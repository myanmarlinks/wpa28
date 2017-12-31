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

function _db_Update(string $table_name, int $id, array $data) { 
	$insert_text = "";
	foreach ($data as $key => $value) {
		$insert_text .= "`" . $key . "` = ";
		if(gettype($value) == 'string') {
			$insert_text .= "'" . $value . "'";
		} else {
			$insert_text .= $value;
		}
		$insert_text .= ", ";
	}
	
	$final = rtrim($insert_text, ", ");
	
	$sql = "UPDATE " . $table_name . " SET " . $final . " WHERE id = " . $id;
	$conn = _db_connect();
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return $result;
}

function _db_Insert(string $table_name, array $data) {
	$conn = _db_connect();
	$keys = array_keys($data);
	$i_keys = implode(", ", $keys);
	$values = array_values($data);
	$i_values = "";
	foreach ($values as $value) {
		$i_values .= "'" . $value . "', ";
	}
	$e_values = rtrim($i_values, ", ");

	$sql = "INSERT INTO " . $table_name . "(" . $i_keys . ")" . " VALUES(" . $e_values . ")";

	$result = mysqli_query($conn, $sql);
	if($result == true) {
		$last_id = mysqli_insert_id($conn);
	}
	mysqli_close($conn);
	return $last_id;
}


function _db_getById(string $table_name, int $id) {
	$conn = _db_connect();
	$sql = "SELECT * FROM " . $table_name . " WHERE id = " . mysqli_real_escape_string($conn, $id);
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return mysqli_fetch_assoc($result);

}

function _db_getAll(string $table_name, array $fields = null)  {
	$conn = _db_connect();
	if($fields == null) {
		$sql = "SELECT * FROM " . $table_name;	
	} else {
		$sql = "SELECT ";
		foreach($fields as $field) {
			$sql .= '`' . $field . "`,";
		}
		$sql = rtrim($sql, ",");
		$sql .= " FROM " . $table_name;
	}
	
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

 ?>