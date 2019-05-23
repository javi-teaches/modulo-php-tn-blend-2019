<?php
	$products = [
		[
			"id" => 1,
			"img" => "img-phone-01.jpg",
			"title" => "Nombre del Producto",
			"price" => 345,
			"shortDescription" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
		],
		[
			"id" => 2,
			"img" => "img-phone-02.jpg",
			"title" => "Nombre del Producto",
			"price" => 345,
			"shortDescription" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"longDescription" => "Descripción larga - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		],
		[
			"id" => 3,
			"img" => "img-phone-02.jpg",
			"title" => "Nombre del Producto",
			"price" => 345,
			"shortDescription" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"longDescription" => "Descripción larga - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		],
		[
			"id" => 4,
			"img" => "img-phone-01.jpg",
			"title" => "Nombre del Producto",
			"price" => 345,
			"shortDescription" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
		],
		[
			"id" => 5,
			"img" => "img-phone-02.jpg",
			"title" => "Nombre del Producto",
			"price" => 345,
			"shortDescription" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
			"longDescription" => "Descripción larga - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		],
		[
			"id" => 6,
			"img" => "img-phone-02.jpg",
			"title" => "Nombre del Producto",
			"price" => 345,
			"shortDescription" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
		],
	];

	function longDescription($oneProduct) {
		if (isset($oneProduct["longDescription"])) {
			return $oneProduct["longDescription"] . " - $" . $oneProduct["price"];
		} else {
			return $oneProduct["shortDescription"];
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<title>Craftsy | Home</title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<header> <!-- Encabezadp -->
				<nav class="main-nav">
					<a href="index.html"><img class="logo" src="img/logo.png" alt="logo craftsy"></a>
					<ul class="menu">
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Tablets</a></li>
						<li><a href="#">Computadoras</a></li>
					</ul>
					<ul class="menu access">
						<li><a href="login.html">login</a></li>
						<li><a href="register.html">registro</a></li>
					</ul>
				</nav>
			</header>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<?php foreach ($products as $oneProduct): ?>
						<article class="producto"><!-- Contenedor de cada producto -->
							<img class="main-photo" src="img/<?= $oneProduct["img"] ?>" alt="">
							<h2 class="name"> <?= $oneProduct["title"] ?> </h2>
							<p><?php echo longDescription($oneProduct); ?></p>
							<a class="more" href="#">ver más</a>
						</article>
					<?php endforeach; ?>
				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
