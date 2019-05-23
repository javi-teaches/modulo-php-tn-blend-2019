<?php
	require_once "productos.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Detalle del producto</title>
	</head>
	<body>
		<?php if($_GET["id"] <= count($productos) ) : ?>
			<h2>
				<?php
					$id = $_GET["id"] - 1;
					echo $productos[$id]["nombre"];
				?>
			</h2>
			<h4>$ <?php echo $productos[$id]["precio"]; ?></h4>
		<?php else: ?>
			<h2>404 no found.</h2>
		<?php endif; ?>
	</body>
</html>
