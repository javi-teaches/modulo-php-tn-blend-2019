<?php
	require_once 'conection.php';

	$pageTitle = 'Crear una película';
	require_once 'partials/head.php';
?>
		<div class="container">
			<h2>Crear una película</h2>
			<form method="post">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label>Título:</label>
							<input type="text" name="titulo" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Rating:</label>
							<input type="text" name="rating" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Premios:</label>
							<input type="text" name="premios" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Duración:</label>
							<input type="text" name="duración" class="form-control">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Fecha de estreno:</label>
							<input type="date" name="fecha_estreno" class="form-control">
						</div>
					</div>
					<div class="col-12 text-center">
						<button type="submit" class="btn btn-success">Guardar película</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
