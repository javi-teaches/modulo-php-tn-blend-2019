<?php

	function consultarDB($query){
		$conexion = new PDO(
			'mysql:host=localhost; dbname=movies_db; charset=utf8mb4',
			'root',
			''
		);

		$stmt = $conexion->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	if ($_POST) {
		$word = trim($_POST['word']);
		$resultados = consultarDB(
			"SELECT m.title, m.rating, g.name AS 'genero'
			FROM movies AS m
			INNER JOIN genres AS g ON g.id = m.genre_id
			WHERE title LIKE '%$word%'
			"
		);
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Buscador de películas</title>
	</head>
	<body>
		<form method="post">
			<label>Buscar películas:</label>
			<input type="text" name="word">
			<button type="submit">Buscar</button>
		</form>
		<?php if (isset($resultados) && count($resultados) > 0): ?>
			<ul>
				<?php foreach ($resultados as $pelicula): ?>
					<li>
						<b>Título:</b> <?php echo $pelicula['title'] ?> <br>
						<b>Rating:</b> <?php echo $pelicula['rating'] ?> <br>
						<b>Género:</b> <?php echo $pelicula['genero'] ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</body>
</html>
