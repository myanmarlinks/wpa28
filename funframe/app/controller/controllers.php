<?php 

function BarController() {
	$data = [
		'title'	=> 'Myanmar Links'
	];
	load_view("bar", $data);
}

function HomeController() {
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