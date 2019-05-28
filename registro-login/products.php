<?php
	$pageTitle = 'Productos';
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
		<div class="row">
			<!-- Los productos -->
			<?php foreach ($productsList as $oneProduct) : ?>

			<div class="col-md-6 col-lg-4">
				<div class="card">
					<img src="images/<?= $oneProduct['image'] ?>" class="card-img-top" alt="imagen del producto">
					<div class="card-body">
						<h5 class="card-title"><?= $oneProduct['title'] ?></h5>
						<p class="card-text"><?= substr($oneProduct['description'], 0, 145) ?>...</p>
						<p class="card-text">
							<?php for ($i = 1; $i <= $oneProduct['ranking']; $i++): ?>
								<i class="fa fa-star"></i>
							<?php endfor; ?>
						</p>
						<a href="detalle-producto.php?id=<?php echo $oneProduct['id']; ?>" class="btn btn-success">Ver detalle del producto</a>
					</div>
				</div>
			</div>

			<?php endforeach; ?>
			<!-- Los productos -->
			</div>
		</div>
	</div>
	<!-- //Products -->

<?php require_once 'partials/footer.php'; ?>
