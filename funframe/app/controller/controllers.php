<?php 

function BarController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'students'	=> _db_getAll("students", ['name'])
	];
	load_view("bar", $data);
}

function HomeController() {
	
	$data = [
		'students' => _db_getAll("students")
	]; 
	load_view("home", $data);
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