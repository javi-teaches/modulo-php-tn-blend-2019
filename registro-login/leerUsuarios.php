<?php

	$users = file_get_contents('data/users.json');

	$usersInArray = json_decode($users, true);

	$wonderWoman = [
		"name" => "Wonder Woman"
	];

	$usersInArray[] = $wonderWoman;
	// array_push($wonderWoman, $usersInArray);

	$backToJson = json_encode($usersInArray);

	file_put_contents('data/users.json', $backToJson);

	

?>
