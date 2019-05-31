<?php

	require_once 'register-controller.php';

	$allUsers = getAllUsers();

	$pageTitle = 'Profile';
	require_once 'partials/head.php';
?>
	<?php require_once 'partials/navbar.php'; ?>

	<div class="container">
		<div class="row">
			<?php foreach ($allUsers as $oneUser): ?>
				<div class="col-md-4">
					<br>
					<h2>Hola <?= $oneUser['name']; ?></h2>
					<img src="<?= $oneUser['laImagenFinal']; ?>" alt="imagen usuario">
					<br><br>
					<a href="#" class="btn btn-info"><?= $oneUser['email']; ?></a>
					<a href="#" class="btn btn-danger">Editar información</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

<?php require_once 'partials/footer.php'; ?>
