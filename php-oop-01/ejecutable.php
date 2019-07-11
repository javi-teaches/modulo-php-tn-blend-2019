<?php
	require_once('Auto.php');
	require_once('Conductor.php');

	$juanita = new Conductor('Juanita', 25, 94563452);

	// Instancia
	$auto1 = new Auto('Fiat', 1992, 'Verde'); // Acá tengo el objeto
	// $auto1->setMarca('Fiat');
	// $auto1->setModelo(1992);

	$auto2 = new Auto('Peugeot', 2016); // Acá tengo el objeto
	// $auto2->setMarca('Peugeot');
	// $auto2->setModelo(2016);

	echo "<pre>";
	var_dump($juanita);
	echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Jugando con PHP y OOP</title>
	</head>
	<body>
		<h2>hola soy <?= $juanita->getNombre(); ?> voy a conducir un auto. <?= $juanita->conducirAuto($auto1) ?>, La marca del auto que estoy conduciendo es <?= $juanita->marcaAuto($auto1) ?> </h2>
		<hr>
		<h3>Tengo un auto de marca <?= $auto1->getMarca(); ?> que cuando arranca hace <?= $auto1->arrancar(); ?> y es del año <?= $auto1->getModelo(); ?>.</h3>
		<hr>
		<h3>Tengo un auto de marca <?= $auto2->getMarca(); ?> que cuando arranca hace <?= $auto2->arrancar(); ?> y es del año <?= $auto2->getModelo(); ?></h3>
	</body>
</html>
