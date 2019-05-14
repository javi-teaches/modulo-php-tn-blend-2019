<?php
	$user = 'Yesi';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
			.red {
				color: red;
			}
		</style>
	</head>
	<body>

		<h1 class="red">Hola <?php echo $user; ?>, "bienvenid@"!</h1>

		<?php echo "<h1 class='red'>Hola $user, \"bienvenid@\"!</h1>"; ?>

	</body>
</html>
