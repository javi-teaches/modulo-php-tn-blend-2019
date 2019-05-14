<?php
	$user = '';
	$age = 15;

	if ( $user != '' && $age >= 18 ) {
		$welcome = "Bienvenid@ $user, podés entrar.";
	} elseif ( $user != '' ) {
		$welcome = "Hola $user, lo siento, no podés entrar a mi sitio web, pues sos menor de edad.";
	} else {
		$welcome = "Hola Invitad@";
	}

	$myArray = [];

	// IF NORMAL
	if ( $myArray ) {
		echo "El array no está vacío";
	} else {
		echo "Array vacío";
	}

	echo "<br>";

	// IF Ternario
	echo $myArray ? 'El array no está vacío' : 'Array vacío';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Condicionales</title>
	</head>
	<body>
		<h3><?php echo $welcome; ?></h3>
		<h4>Otros valores que evalúan como <b>true</b> o <b>false</b>: </h4>
		<ul>
			<li> [] = false </li>
			<li> null = false </li>
			<li> 0 = false </li>
			<li> "0" = false </li>
			<li> "" = false </li>
			<li> cualquier otro valor evalua como <b>true</b> </li>
		</ul>
	</body>
</html>
