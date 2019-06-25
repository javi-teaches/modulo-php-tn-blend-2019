<?php
	// requerimos el controlador del sistema
	require_once 'register-login-controller.php';

	if ( !isLogged() ) {
		header('location: login.php');
		exit;
	}

	$user = $_SESSION['userLogged'];

	$pageTitle = 'Profile';
	require_once 'partials/head.php';
?>
	<?php require_once 'partials/navbar.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<br>
				<h2>Hola <?= $user['name']; ?></h2>
				<img src="<?= $user['laImagenFinal']; ?>" alt="imagen usuario">
				<br><br>
				<a href="#" class="btn btn-info"><?= $user['email']; ?></a>
				<a href="#" class="btn btn-danger">Editar información</a>
			</div>
		</div>
	</div>

<?php require_once 'partials/footer.php'; ?>
