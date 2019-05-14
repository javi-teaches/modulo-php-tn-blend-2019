<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Tipos de datos</title>
	</head>
	<body>
		<h2>Tipos de datos</h2>
		<ul>
			<li>String</li>
			<li>Integer</li>
			<li>Float</li>
			<li>Boolean</li>
			<li>
				Array
				<ul>
					<li>Asociativos</li>
					<li>No Asociativos</li>
				</ul>
			</li>
			<li>Null</li>
		</ul>

		<h3>Strings</h3>
		<?php
			$myString = 'Hello world!';
			$myOtherString = 'How are you?';
		?>
		<p>Voy a imprimir una variable de php: <?php echo "$myString $myOtherString"; ?></p>

		<h3>Integer y Float</h3>
		<?php
			$myInt = 5;
			$myOtheInt = 4;
			$myFloat = 1.5;
		?>
		<p>Voy a restar y sumar dos variables de tipo INT y una de tipo FLOAT: <?php echo $myFloat - $myInt * $myOtheInt; ?></p>

		<h3>Boolean y Null</h3>
		<?php
			$myBooleanTrue = true;
			$myBooleanFalse = false;
			$myNull = NULL;
		?>
		<p>Voy a imprimir dos variables boolenas: <?php echo "$myBooleanTrue $myBooleanFalse $myNull"; ?>. Recordemos: los booleanos no se muestran en pantalla a no ser que valga <b>true</b>. En ese caso se imprimen como un 1.</p>

		<h3>Arrays</h3>
		<?php
			$userList = ['Yesi', 'Dani', 'Carla', 'Andrés', 'Maru'];

			$dragonMother = [
				'name' => 'Daenarys',
				'lastName' => 'Targaryen',
				'childrens' => ['Drogon', 'Viserion', 'Rhaegal']
			];
		?>
		<p>Voy a imprimir varias posiciones del array: <?php echo "$userList[0], $userList[3] y $userList[2]."; ?></p>

		<p>El nombre de la madre de los dragones es: <?php echo $dragonMother['name'] . " " . $dragonMother['lastName'] ?>. Sus hijos se llaman:</p>
		<ul>
			<li> <?php echo $dragonMother['childrens'][0]; ?> </li>
			<li> <?php echo $dragonMother['childrens'][1]; ?> </li>
			<li> <?php echo $dragonMother['childrens'][2]; ?> </li>
		</ul>

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
	</body>
</html>
