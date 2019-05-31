<?php

	$users = json_decode(file_get_contents('data/users.json'), true);

	$users[] = [
		"name" => "Wonder Woman"
	];
	// array_push($wonderWoman, $users);

	file_put_contents('data/users.json', json_encode($users));



?>
