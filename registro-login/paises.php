<?php
	$paises = file_get_contents('https://restcountries.eu/rest/v2/all');

	$arrayPaises = json_decode($paises, true);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Paises</title>
	</head>
	<body>
		<select>
			<?php foreach ($arrayPaises as $unPais): ?>
				<option value=""><?php echo $unPais['name'] ?></option>
			<?php endforeach; ?>
		</select>
	</body>
</html>
