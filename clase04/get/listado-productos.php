<?php
	require_once "productos.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Listado de productos</title>
	</head>
	<body>
		<ul>
			<?php foreach ($productos as $unProducto): ?>
				<li><a href="detalle-producto.php?id=<?= $unProducto["id"] ?>&otracosa=algo con espacios"> <?= $unProducto["nombre"] ?> </a></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
