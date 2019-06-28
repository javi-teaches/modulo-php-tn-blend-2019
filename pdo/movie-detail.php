<?php
	require_once 'conection.php';

	$stmt = $conection->prepare("
		SELECT m.title, m.rating, m.length, g.name AS genero
		FROM movies AS m
		LEFT JOIN genres AS g ON g.id = m.genre_id
		WHERE m.id = :id
	");

	$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$stmt->execute();

	$movie = $stmt->fetch(PDO::FETCH_ASSOC);

	$pageTitle = $movie['title'];
	require_once'partials/head.php';
?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-6">
					<div class="card">
					<img src="images/default-thumb.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?= $movie['title']; ?></h5>
					<p class="card-text"><b>Rating:</b> <?= $movie['rating']; ?></p>
					<p class="card-text"><b>Género:</b> <?= $movie['genero']; ?></p>
					<p class="card-text"><b>Duración:</b> <?= round($movie['length'] / 60); ?>hs</p>
					<a href="movies.php" class="btn btn-primary">Volver</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
