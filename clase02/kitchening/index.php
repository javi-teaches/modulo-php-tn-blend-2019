<?php
	$navLinks = [
		"home" => "index.php",
		"quienes" => "quienes.php",
		"servicios" => "servicios.php",
		"portfolio" => "portfolio.php",
		"sucursales" => "sucursales.php",
		"contacto" => "contacto.php",
		"productos" => "productos.php",
		"carta" => "carta.php",
		"queseyo" => "queseyo.php",
	];

	$products = [
		[
			"id" => 1,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
			"precio" => 300,
			"imagen" => "img-pdto-1.jpg",
			"enOferta" => true,
			"valoracion" => 1,
		],
		[
			"id" => 2,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
			"precio" => 500,
			"imagen" => "img-pdto-2.jpg",
			"enOferta" => false,
			"valoracion" => 3,
		],
		[
			"id" => 3,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
			"precio" => 500,
			"imagen" => "img-pdto-3.jpg",
			"enOferta" => false,
			"valoracion" => 2,
		],
		[
			"id" => 4,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
			"precio" => 300,
			"imagen" => "img-pdto-1.jpg",
			"enOferta" => true,
			"valoracion" => 5,
		],
		[
			"id" => 5,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
			"precio" => 500,
			"imagen" => "img-pdto-2.jpg",
			"enOferta" => true,
			"valoracion" => 5,
		],
		[
			"id" => 6,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.",
			"precio" => 500,
			"imagen" => "img-pdto-3.jpg",
			"enOferta" => false,
			"valoracion" => 2,
		],
	]
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
						<li><a href="<?php echo $linkUrl; ?>"> <?php echo $linkTxt; ?> </a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<?php foreach ($products as $oneProduct): ?>
				<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?= $oneProduct["imagen"]?>" alt="<?= $oneProduct["titulo"] ?>">
					<?php if ( $oneProduct["enOferta"] ): ?>
						<img class="special" src="images/img-descuento.png" alt="plato nuevo">
					<?php else: ?>
						<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<?php endif; ?>
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2> <?= $oneProduct["id"] . ". " . $oneProduct["titulo"] ?> </h2>
				<p> <?= $oneProduct["descripcion"] ?> </p>
				<?php for ($i = 1; $i <= $oneProduct["valoracion"]; $i++): ?>
					<i class="fas fa-star" style="color: crimson;"></i>
				<?php endfor; ?>
				<br>
				<br>
				<a class="more" href="#">ver más</a>
			</article>
			<?php endforeach; ?>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
