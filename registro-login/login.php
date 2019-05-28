<?php
	$pageTitle = 'Login';
	require_once 'partials/head.php';
?>

	<?php require_once 'partials/navbar.php'; ?>

	<!-- Register-Form -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h2>Formulario de Login</h2>

				<form method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Correo electrónico:</b></label>
								<input type="text" name="email" class="form-control" value="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Password:</b></label>
								<input type="password" name="password" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="rememberUser">
									Recordarme
							  </label>
							</div>
							<br>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Ingresar</button>
							¿Aún no tenés cuenta? <a href="register.php">Registrate</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //Register-Form -->

<?php require_once 'partials/footer.php'; ?>
