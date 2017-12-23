<?php 

function BarController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'students'	=> [
			[
				"id" 	=> 1,
				'name'	=> 'Aung Aung',
				'address'	=> 'Hledan'
			],
			[
				"id" 	=> 1,
				'name'	=> 'Aung Aung',
				'address'	=> 'Hledan'
			],
			[
				"id" 	=> 1,
				'name'	=> 'Aung Aung',
				'address'	=> 'Hledan'
			]

		]
	];
	load_view("bar", $data);
}

function HomeController() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wpa28db";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	$sql = "SELECT * FROM students";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . "<br>";
		}
	} else {
		echo "0 results";
	}


	mysqli_close($conn);
	load_view("home");
}

function BlogControler() {
	$data = [
		'another' => 'Another'
	];
	load_view("blog", $data);
}

function FooController() {
	load_view("erere");
}

?>