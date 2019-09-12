<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Editar Menú de Almuerzos</title>
</head>
<body>
	
	<div class="container">

		<div class="card">

			<div class="card-header bg-info">
				<h3 class="text-white">Gestionar Almuerzos</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<label for="nombre">Nombre:</label>
						<input type="text" name="nombre" placeholder="Por favor digite el nombre del almuerzo" class="form-control"tofocus>
					</div>
					<div class="col-md-6">
						<label for="valor">Valor:</label>
						<input type="text" name="valor" placeholder="Por favor digite el valor del almuerzo" class="form-control">
					</div>
				</div>				
			</div>
			<div class="card-footer">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Valor</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="datos">

					</tbody>
				</table>
			</div>

		</div>

	</div>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/all.min.css">
</body>
	<script src="../assets/js/all.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.js"></script>
	<script src="../js/almuerzos.js"></script>
</html>