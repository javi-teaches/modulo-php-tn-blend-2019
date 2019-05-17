<?php


	$estudiantes = ["Denise", "Alexis", "Dina", "Alejandro", "Maru", "Lourdes", "Cata"];
	// For
	for ($i = 0; $i < count($estudiantes); $i++) {
		echo "$estudiantes[$i] <br>";
	}

	echo "<hr>";

	for ($i = 1; $i <= 10; $i++) {
		echo "5 x $i = " . $i * 5 . "<br>";
	}

	echo "<hr>";

	for ($i = 1; ($i * 4) <= 32; $i++) {
		echo "4 x $i = " . $i * 4 . "<br>";
	}

	echo "<hr>";

	// Foreach
	foreach ($estudiantes as $unEstudiante) {
		echo "$unEstudiante <br>";
	}

	echo "<hr>";

	$automovil = [
		"marca" => "Renault",
		"patente"  => "AB356CD",
		"modelo" => 2018,
		"conductores" => ["Yesica", "Denise"],
		"colores" => ["Negro", "Blanco"],
	];

	foreach ($automovil as $clave => $valor) {
		if ( is_array($valor) ) {
			echo "$clave: ";
			foreach ($valor as $unConductor) {
				echo "$unConductor, ";
			}
			echo "<br>";
		} else {
			echo "$clave: $valor <br>";
		}
	}

	function bucles($numeros) {
  	$resultado = 0;

  	// Acá va tu código
		foreach ($numeros as $unNumero) {
			$resultado = $resultado + $unNumero;
		}

  	return $resultado;
	}

	echo bucles([5, 7, 10]);

	function cantantes($cantantes) {
	  $resultado = [];

	  // Tu solución va acá
		foreach ($cantantes as $nombre => $apellido) {
			$resultado[$apellido] = $nombre;
		}

	  return $resultado;
	}

	$cantantes = [
	  "Luis" => "Miguel",
	  "Charly" => "García",
	  "Joaquín" => "Sabina"
	];

	echo "<pre>";
	var_dump( cantantes($cantantes) );
	echo "</pre>";

	$cantantes2 = [
	  0 => [
	    "nombre" => "Luis",
	    "apellido" => "Miguel"
	  ],
	  1 => [
	    "nombre" => "Charly",
	    "apellido" => "Garcia"
	  ],
	  2 => [
	    "nombre" => "Joaquín",
	    "apellido" => "Sabina"
	  ]
	];

	function cantantes2($cantantes) {
  	$nombres = [];

  	// Tu código va acá!
		foreach ($cantantes as $unCantante) {
			$nombres[] = $unCantante['nombre'];
		}

  	return $nombres;
	}

	echo "<pre>";
	var_dump( cantantes2($cantantes2) );
	echo "</pre>";

	echo "<hr>";

	// While - Do while
	$a = 2;
	while ($a <= 10) {
		echo "$a <br>";
		$a+=2;
	}

	echo "<hr>";

	$b = 12;
	do {
		echo "$b <br>";
		$b++;
	} while ($b <= 10);

	echo "<hr>";

	$palabras = ["basta", "hola", "soy", "javier"];

	$i = 0;
	do {
		echo $palabras[$i] . "<br>";
		$i++;
	} while ($palabras[$i] != 'basta' && $i < count($palabras) - 1);

?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
