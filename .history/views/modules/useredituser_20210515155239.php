<?php 
require_once './models/Roles.dao.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
</head>
<body>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-body">
    <div class="card-header">
		<h1>Lista de Alumnos</h1>
		</div>
		<h2>Listar</h2>
	</header>

	<a href="./views/modules/ingresar.php">Ingresar nuevo</a>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>numero_identificacion</th>
			<th>telefono_fijo</th>
			<th>telefono_movil</th>
			<th>direccion</th>
			<th>correo_electronico</th>
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
				<td><a href="./views/modules/editar.php?id_usuario=<?=$fila[0]?>">Editar</a></td>
				<td><a href="./controllers/Roles.controlador.php?a=elim&id_usuario=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
			</tr>
		<?php } ?>
	</table>
	</div>
	</div>
	</div>
</body>
</html>