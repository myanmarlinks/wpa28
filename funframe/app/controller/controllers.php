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