<?php
	session_start();

	if ( isset($_COOKIE['userEmail']) ) {
		$user = getUserByEmail($_COOKIE['userEmail']);
		$_SESSION['userLogged'] = $user;
	}

	function registerValidate () {
		// Creo un array de errores vacío
		$errors = [];

		// Guardo lo que vino en post en la posición 'name'
		$fullName = trim($_POST['name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$rePassword = trim($_POST['rePassword']);
		$country = $_POST['country'];
		$avatar = $_FILES['avatar'];

		// Si $fullName está vació
		if ( empty($fullName) ) {
			// Seteo en el array de errores la posición 'inFullName'
			$errors['inFullName'] = 'El campo nombre no puede estar vacío';
		}

		// Si $email está vació
		if ( empty($email) ) {
			// Seteo en el array de errores la posición 'inEmail'
			$errors['inEmail'] = 'El campo correo electrónico es obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) { // Si NO es un formato de correo electrónico
			$errors['inEmail'] = 'Escribí un formato de correo válido';
		} elseif ( emailExist($email) ) {
			$errors['inEmail'] = 'Ese email ya esta registrado';
		}

		// Si $password está vació
		if ( empty($password) ) {
			// Seteo en el array de errores la posición 'inPassword'
			$errors['inPassword'] = 'La contraseña no puede estar vacía';
		} elseif ( strlen($password) < 5 ) { // Si la longitud es inferior a 5 caracteres
			$errors['inPassword'] = 'La contraseña debe tener 5 letras o más';
		}

		// Si $rePassword está vació
		if ( empty($rePassword) ) {
			// Seteo en el array de errores la posición 'inRePassword'
			$errors['inRePassword'] = 'Debes escribir la contraseña de nuevo';
		} elseif ( $password != $rePassword ) { // Si $password y $rePassword son distintos
			$errors['inRePassword'] = 'Las contraseñas no coinciden';
		}

		// Si $rePassword está vació
		if ( empty($country) ) {
			// Seteo en el array de errores la posición 'inRePassword'
			$errors['inCountry'] = 'Elegí un país de nacimiento';
		}

		// SI NO subieron un archivo
		if ($avatar['error'] != UPLOAD_ERR_OK) {
			$errors['inAvatar'] = 'Che, subite una imagen';
		} else {
			// Entro aquí SIEMPRE que hayan subido un ARCHIVO
			$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);

			if ( $ext != 'jpg' && $ext != 'png' && $ext != 'gif' ) {
				$errors['inAvatar'] = 'Las extensiones permitidas son JPG, PNG y GIF';
			}
		}

		// Retorno el array de errores
		return $errors;
	}

	function saveUser() {
		// 1. Leemos el archivo de usuarios que está en JSON
		$usersList = getAllUsers();

		// 2. Agregar la información del usuario al array de usuarios
		// 2.a Lo 1ero es sacar la posición de rePassword
		// 2.b Hasheamos la contraseña
		unset($_POST['rePassword']);
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$usersList[] = $_POST;

		// 3. Volver a guardar a todos los usuarios con éste último
		file_put_contents('data/users.json', json_encode($usersList, JSON_PRETTY_PRINT));
	}

	function emailExist($email) {
		// 1. Traigo a todos los usuarios
		$allUsers = getAllUsers();

		// 2. Recorrer el array y preguntar si está el email
		foreach ($allUsers as $oneUser) {
			if ($oneUser['email'] == $email) {
				return true;
			}
		}

		// 3. Si no encuentro el email
		return false;
	}

	function getAllUsers() {
		return  json_decode(file_get_contents('data/users.json'), true);
	}

	function saveImage($file) {
		// 1. Obtengo el nombre de la imagen
		$name = $file['name'];

		// 2. Obtengo la extensión del nombre de la imagen
		$ext = pathinfo($name, PATHINFO_EXTENSION);

		// 3. Armo un nombre único
		// 3.a Armo la ruta final donde va a ir el archivo
		$finalPath = 'data/avatars/' . uniqid('img-') . "." . $ext;

		// 4. Obtengo el archivo temporal que tiene PHP en memoria
		$tempFile = $file['tmp_name'];

		// 5. Subo el archivo a mi destino FINAL
		move_uploaded_file($tempFile,  $finalPath);

		return $finalPath;
	}

	function loginValidate() {
		// Creo un array de errores vacío
		$errors = [];

		// Guardo lo que vino en post en la posición 'name'
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		// Si $email está vació
		if ( empty($email) ) {
			// Seteo en el array de errores la posición 'inEmail'
			$errors['inEmail'] = 'El campo correo electrónico es obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) { // Si NO es un formato de correo electrónico
			$errors['inEmail'] = 'Escribí un formato de correo válido';
		} elseif ( !emailExist($email) ) {
			$errors['inEmail'] = 'Ese usuario no está registrado';
		} else {
			// Si el email existe en mi DB, traigo toda la data del usuario
			$theUser = getUserByEmail($email);

			if ( !password_verify($password, $theUser['password']) ) {
				$errors['inPassword'] = 'Las crendenciales no coinciden';
			}
		}

		// Si $password está vació
		if ( empty($password) ) {
			// Seteo en el array de errores la posición 'inPassword'
			$errors['inPassword'] = 'La contraseña no puede estar vacía';
		} elseif ( strlen($password) < 5 ) { // Si la longitud es inferior a 5 caracteres
			$errors['inPassword'] = 'La contraseña debe tener 5 letras o más';
		}

		// Retorno el array de errores
		return $errors;
	}

	function getUserByEmail($email) {
		// 1. Traigo a todos los usuarios
		$allUsers = getAllUsers();

		// 2. Recorrer el array y preguntar si está el email
		foreach ($allUsers as $oneUser) {
			if ($oneUser['email'] == $email) {
				// Si me encontré con el email que busco, retorno al usuario
				return $oneUser;
			}
		}

		// 3. Si no encuentro el email retorno false
		return false;
	}

	function login($userToLogin) {
		// 1. Sacamos del array la contraseña
		unset($userToLogin['password']);

		// 2. Guardo en SESSION al usuario
		$_SESSION['userLogged'] = $userToLogin;

		// 3. Redirecciono al perfil
		header('location: profile.php');
		exit;
	}

	function isLogged() {
		return isset($_SESSION['userLogged']);
	}



	// Función para hacer DEBUG
	function myDebug($dato) {
		echo "<pre>";
		var_dump($dato);
		echo "</pre>";
	}
