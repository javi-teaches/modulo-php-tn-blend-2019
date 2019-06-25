<?php
	session_start();

	if ($_POST) {
		if (isset($_POST['inc'])) {
			$_SESSION['counter']++;
		}

		if (isset($_POST['res'])) {
			$_SESSION['counter'] = 0;
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Modificar $_SESSION</title>
	</head>
	<body>
		<?php if ( isset($_SESSION['counter']) ): ?>
			<h2> <?php echo $_SESSION['counter'] ?> </h2>
		<?php endif; ?>
		<form method="post">
			<button type="submit" name="inc">Increment</button>
			<button type="submit" name="res">Reset</button>
		</form>
	</body>
</html>
