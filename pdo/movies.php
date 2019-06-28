<?php
	require_once 'conection.php';

	$statement = $conection->prepare("
		SELECT m.id, m.title AS titulo, g.name AS genero
		FROM movies AS m
		LEFT JOIN genres AS g ON g.id = m.genre_id
		ORDER BY title ASC
	");
	$statement->execute();

	$movies = $statement->fetchAll(PDO::FETCH_ASSOC);

	$pageTitle = 'Listado de películas';
	require_once 'partials/head.php';
?>
		<div class="container">
			<ul class="list-group">
				<?php foreach ($movies as $oneMovie): ?>
					<li class="list-group-item">
						<b>Título:</b> <?= $oneMovie['titulo'] ?>
						<b>Género:</b>
						<?php if ($oneMovie['genero']): ?>
							<?= $oneMovie['genero'] ?>
						<?php else: ?>
							<i>No definido</i>
						<?php endif; ?>
						<a class="btn btn-info" href="movie-detail.php?id=<?= $oneMovie['id']; ?>">[ver detalle]</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</body>
</html>
