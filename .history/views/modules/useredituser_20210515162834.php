<?php 
require_once './models/Roles.dao.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
</head>
<body>
<div class="main-container">
<!-- Row start -->
<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>Title</th>
													<th>Comment</th>
													<th>Module</th>
													<th>Reporter</th>
													<th>Status</th>
													<th>Owner</th>
													<th>Severity</th>
													<th class="text-right">Created</th>
													<th class="text-right">Updated</th>
													<th class="text-right">Due</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>App crashes</td>
													<td>Kelly, can you please take a look.</td>
													<td>Main App</td>
													<td>Lewis</td>
													<td><span class="badge badge-danger">Open</span></td>
													<td>Micheal</td>
													<td class="text-danger">High</td>
													<td class="text-right">Aug-10, 2019</td>
													<td class="text-right">Sep-14, 2019</td>
													<td class="text-right">Oct-20, 2019</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Saving file</td>
													<td>Let me take this up.</td>
													<td>Form Screen</td>
													<td>James</td>
													<td><span class="badge badge-success">In Progress</span></td>
													<td>Donald</td>
													<td class="text-success">Low</td>
													<td class="text-right">Aug-10, 2019</td>
													<td class="text-right">Sep-14, 2019</td>
													<td class="text-right">Oct-20, 2019</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Login fail</td>
													<td>Hey, critical issue.</td>
													<td>Main App</td>
													<td>Powell</td>
													<td><span class="badge badge-danger">Open</span></td>
													<td>Glory</td>
													<td class="text-danger">High</td>
													<td class="text-right">Aug-10, 2019</td>
													<td class="text-right">Sep-14, 2019</td>
													<td class="text-right">Oct-20, 2019</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Saving file</td>
													<td>Let me take this up.</td>
													<td>Form Screen</td>
													<td>James</td>
													<td><span class="badge badge-success">In Progress</span></td>
													<td>Donald</td>
													<td class="text-success">Low</td>
													<td class="text-right">Aug-10, 2019</td>
													<td class="text-right">Sep-14, 2019</td>
													<td class="text-right">Oct-20, 2019</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Login fail</td>
													<td>Hey, critical issue.</td>
													<td>Main App</td>
													<td>Powell</td>
													<td><span class="badge badge-success">In Progress</span></td>
													<td>Glory</td>
													<td class="text-danger">High</td>
													<td class="text-right">Aug-10, 2019</td>
													<td class="text-right">Sep-14, 2019</td>
													<td class="text-right">Oct-20, 2019</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- Row end -->
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-header">
		<h1>Lista de Alumnos</h1>
		</div>
		<div class="card-body pt-0 pb-0">
	<a class="badge badge-success" href="./views/modules/ingresar.php">Ingresar nuevo</a>
	<div class="table-responsive">
	<table class="table table-hover table-bordered">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Identificacion</th>
			<th>Tel.Fijo</th>
			<th>Celular</th>
			<th>Direccion</th>
			<th>Correo</th>
			<th colspan="2">Opciones</th>
		</tr>
		<?php foreach (RolesDAO::listarDatos() as $fila) { ?>
			<tr>
				<td><?= $fila[1] ?></td>
				<td><?= $fila[2] ?></td>
				<td><?= $fila[3] ?></td>
				<td><?= $fila[4] ?></td>
				<td><?= $fila[5] ?></td>
				<td><?= $fila[6] ?></td>
				<td><?= $fila[7] ?></td>
				<td><a class="badge badge-success" href="./views/modules/editar.php?id_usuario=<?=$fila[0]?>">Editar</a></td>
				<td><a class="badge badge-danger" href="./controllers/Roles.controlador.php?a=elim&id_usuario=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
			</tr>
		<?php } ?>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
