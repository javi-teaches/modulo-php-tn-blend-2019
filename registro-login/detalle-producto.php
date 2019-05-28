<?php
	$pageTitle = 'Detalle del producto';
	require_once 'partials/head.php';

	require_once 'partials/navbar.php';

	require_once 'db-products.php';
?>

<style>
	.card {
		margin-bottom: 30px;
	}
</style>

	<!-- Products -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<?php
			$idEnGet = $_GET['id'];

			if ( $idEnGet <= count($productsList) ) {
				$productoEncontrado = $productsList[$idEnGet - 1];
				echo "<pre>";
				var_dump( $productoEncontrado );
				echo "</pre>";
			} else {
				echo "No hay producto con ese ID";
			}
		?>

		<div>
			<img src="images/<?= $productoEncontrado['image'] ?>" alt="">
		</div>
		<h5> <?= $productoEncontrado['title'] ?> </h5>
		<p> <?= $productoEncontrado['description'] ?> </p>

	</div>
	<!-- //Products -->

<?php require_once 'partials/footer.php'; ?>
