<?php
	// Traigo las funciones que controlan mi sistema de Registro y Login
	require_once 'register-login-controller.php';

	if ( isLogged() ) {
		header('location: profile.php');
		exit;
	}

	$countries = [
		'ar' => 'Argentina',
		'br' => 'Brasil',
		'bo' => 'Bolivia',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pe' => 'Perú',
		've' => 'Venezuela',
	];

	if ($_POST) {

		$fullNameInPost = trim($_POST['name']);
		$emailInPost = trim($_POST['email']);
		$countryInPost = $_POST['country'];

		// Ejecuto la función registerValidate y guardo lo que retorna en una variable local de este archivo
		$errorsInRegister = registerValidate();

		// Si el array de errores $errorsInRegister está vacío
		// if ( count($errorsInRegister) == 0 ) {
		// if ( count($errorsInRegister) ) {
		if ( !$errorsInRegister ) {

			// Guardar la imagen y obtener el nombre de la imagen
			$imgName = saveImage($_FILES['avatar']);

			// Le asignamos a $_POST una posición "avatar"
			$_POST['laImagenFinal'] = $imgName;

			// Guardo al usuario
			saveUser();

			header('location: profile.php');
			exit;
		}

	}

	$pageTitle = 'Register';
	require_once 'partials/head.php';

	require_once 'partials/navbar.php';
?>

	<!-- Register-Form -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h2>Formulario de registro</h2>

				<form method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Nombre completo:</b></label>
								<input type="text" name="name" class="form-control"
									value="<?= isset($fullNameInPost) ? $fullNameInPost : ''; ?>"
								>
							</div>
							<?php if ( isset($errorsInRegister['inFullName']) ) : ?>
								<div class="alert alert-danger">
									<?= $errorsInRegister['inFullName']; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Correo electrónico:</b></label>
								<input type="text" name="email" class="form-control"
									value="<?= isset($emailInPost) ? $emailInPost : ''; ?>"
								>
							</div>
							<?php if ( isset($errorsInRegister['inEmail']) ) : ?>
								<div class="alert alert-danger">
									<?= $errorsInRegister['inEmail']; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Password:</b></label>
								<input type="password" name="password" class="form-control">
							</div>
							<?php if ( isset($errorsInRegister['inPassword']) ) : ?>
								<div class="alert alert-danger">
									<?= $errorsInRegister['inPassword']; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Repetir Password:</b></label>
								<input type="password" name="rePassword" class="form-control">
							</div>
							<?php if ( isset($errorsInRegister['inRePassword']) ) : ?>
								<div class="alert alert-danger">
									<?= $errorsInRegister['inRePassword']; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>País de nacimiento:</b></label>
								<select name="country" class="form-control">
									<option value="">Elegí un país</option>
									<?php foreach ($countries as $code => $country): ?>
										<option
											value="<?= $code ?>"
											<?= isset($countryInPost) && $countryInPost == $code ? 'selected' : '';  ?>
										> <?= $country ?> </option>
									<?php endforeach; ?>
								</select>
							</div>
							<?php if ( isset($errorsInRegister['inCountry']) ) : ?>
								<div class="alert alert-danger">
									<?= $errorsInRegister['inCountry']; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Imagen de perfil:</b></label>
								<div class="custom-file">
									<input type="file" name="avatar" class="custom-file-input">
									<label class="custom-file-label">Choose file...</label>
								</div>
							</div>
							<?php if ( isset($errorsInRegister['inAvatar']) ) : ?>
								<div class="alert alert-danger">
									<?= $errorsInRegister['inAvatar']; ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Registrarse</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //Register-Form -->

<?php require_once 'partials/footer.php'; ?>
