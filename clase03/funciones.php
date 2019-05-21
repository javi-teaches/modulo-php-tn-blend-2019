<?php
	function sumar($n1, $n2 = 23) {
		return $n1 + $n2;
	}

	$resultadoDeLaSuma = sumar(5);
	$resultadoDeLaSuma2 = sumar(7, 18);

	echo $resultadoDeLaSuma;
	echo "<br>";
	echo $resultadoDeLaSuma2;
	echo "<br>";

	function elDobleDeLaSuma($n1, $n2 = 23) {
		$laSuma = sumar($n1, $n2);
		return  $laSuma * 2;
	}

	echo elDobleDeLaSuma(5);

	function unoAlDiez() {
		$arrayARetornar = [];

		for ($i = 1; $i <= 10 ; $i++) {
			$arrayARetornar[] = $i;
		}

		return $arrayARetornar;
	}

	echo "<br>";
	echo "<pre>";
	var_dump( unoAlDiez() );
	echo "</pre>";

	function dobles() {
		$arrayDel1Al10 = unoAlDiez();

		$arrayARetornar = [];

		foreach ($arrayDel1Al10 as $unNumero) {
			$arrayARetornar[] = $unNumero * 2;
		}

		return $arrayARetornar;
	}

	echo "<br>";
	echo "<pre>";
	var_dump( dobles() );
	echo "</pre>";
?>
