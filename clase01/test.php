<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Clase 01 - PHP</title>
	</head>
	<body>
		<h2>Variables</h2>

		<?php
			// Creo una variable a la que le asigno un valor
			$user = 'Jane';

			/*
				Imprimo la variable con concatenación
			*/
			echo '<i>Hola ' . $user . ' ¿cómo estás?</i>';
		?>

		<h2>Tipos de datos</h2>

		<?php
			$cadenaDeTexto = 'Saludo terrícolas <br>';
			var_dump($cadenaDeTexto);
			$entero = 35;
			$decimal = 4.5;
			$booleanoTrue = true;
			$booleanoFalse = false;
			$nulo = null;
			$array = ['Cadena de texto', 5, 0.5, false, null];

			echo "$cadenaDeTexto <br>";
			echo "$entero <br>";
			echo "$decimal <br>";
			echo "$booleanoTrue <br>";
			echo "$booleanoFalse <br>";
			echo "$nulo <br>";

			// NO se puede imprimir con echo un array!!!
			// echo "$array <br>";

			/*
				Para ver lo que tiene un array usamos var_dump()
				Sin embargo el var_dump() solo sirve para hacer DEBUG
			*/
			var_dump($array);

			// Accediendo a una posición específica de un array
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo $array[0];
			echo '<br>';
			echo $array[1];
			echo '<br>';
			echo $array[2];
		?>

		<h2>Arrays Asociativos</h2>

		<?php
			$mujerMaravilla = [
				'nombre' => 'Diana',
				'universo' => 'DC',
				'poderEspecial' => 'Latigo',
				'edad' => 98765432
			];

			echo $mujerMaravilla['nombre'] . ' es el nombre real de la mujer maravilla, su super poder es el ' . $mujerMaravilla['poderEspecial'];
		?>

		<h2>Operadores</h2>

		<?php

			echo 5 + 4;
			echo "<br>";

			echo 5 * 4;
			echo "<br>";

			echo 5 / 4;
			echo "<br>";

			echo 5 - 4;
			echo "<br>";

			echo 5 % 4;
			echo "<br>";

			echo 5 ** 4;
			echo "<br>";

			echo pow(5, 4);
			echo "<br>";

		?>

		<h2>el IF</h2>

		<?php
			$computadora = 'windows';

			$arrayVacio = [];

			if ($computadora == 'windows' || $computadora == 'mac') {
				echo "Tenés una windows o un mac";
			}

			echo '<br>';

			if ( !$arrayVacio ) {
				echo "Si está vacío";
			} else {
				echo "No está vacío";
			}

			echo '<br>';

			$num1 = 15;
			$num2 = 30;

			// condicion ? escenario true : escenario false;
			echo $num1 > $num2 ? $num1 : $num2;

			echo '<br>';

			if ($num1 > $num2) {
				echo $num1;
			} else {
				echo $num2;
			}
		?>
	</body>
</html>
