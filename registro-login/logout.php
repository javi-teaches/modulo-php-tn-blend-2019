<?php
	session_start();
	session_destroy();

	// Borrar la cookie
	setcookie('userEmail', '', -1);

	header('location: index.php');
	exit;
