<?php
	// Pregunto si vino algo por POST
	if ($_POST) {
		$userFromPost = trim($_POST["user"]);
		$passwordFromPost = trim($_POST["password"]);

		// Preguntamos si escribieron el user
		if ( empty($userFromPost) ) {
			echo "Ey poné el usuario <br>";
		}

		// Preguntamos si escribieron la password
		if ( empty($passwordFromPost) ) {
			echo "Ey poné la contraseña <br>";
		} elseif ( strlen($passwordFromPost) <= 5) {
			// Preguntamos si la contraseña contiene 5 caracteres o más
			echo "La contraseña debe tener 5 caracteres o más<br>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>
		<form method="post">
			<div>
				<label>Usuario:</label>
				<input
					type="text"
					name="user"
					value="<?= isset($userFromPost) ? $userFromPost : ''; ?>"
				>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password">
			</div>
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>
