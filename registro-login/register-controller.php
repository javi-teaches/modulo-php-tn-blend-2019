<?php

	function registerValidate () {
		// Creo un array de errores vacío
		$errors = [];

		// Guardo lo que vino en post en la posición 'name'
		$fullName = trim($_POST['name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$rePassword = trim($_POST['rePassword']);
		$country = $_POST['country'];

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

		// Retorno el array de errores
		return $errors;
	}
