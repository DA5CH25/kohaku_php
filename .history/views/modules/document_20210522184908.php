<?php 
require_once './models/Roles.dao.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
	<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4-custom.css" />
		<link href="./vendor/vendor/datatables/buttons.bs.css" rel="stylesheet" />
</head>
<body>
<div class="main-container">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
			<div class="card-header">
				<div class="card-title">LISTA DE ALUMNOS</div>
			</div>
		<div class="table-container">
		<div class="card-body pt-0 pb-0">
	<a class="badge badge-success" href="/Kohaku_php/?page=usercreate">Ingresar nuevo</a>
	<br>
	<br>
	<br>
	<div class="table-responsive">
	<table class="table table-hover table-bordered custom-table" >
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Identificacion</th>
			<th>Foto</th>
			<th>Documento</th>
			<th>Cedula</th>
			<th colspan="3">Opciones</th>
		</tr>
		<?php foreach (RolesDAO::listarDocument() as $fila) { ?>
			<tr>
				<td><?= $fila[1] ?></td>
				<td><?= $fila[2] ?></td>
				<td><?= $fila[3] ?></td>
				<td><?= $fila[16] ?></td>
				<td><?= $fila[16] ?></td>
				<td><?= $fila[17] ?></td>
                <td>
					<div class="td-actions">
						<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Add Row">
							<i class="icon-circle-with-plus"></i>
						</a>
						<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Save Row">
							<i class="icon-save"></i>
						</a>
						<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Delete Row">
							<i class="icon-cancel"></i>
						</a>
					</div>
					</td>
			</tr>
		<?php } ?>
		
	</table>

	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	
		<script src="./vendor/vendor/datatables/dataTables.min.js"></script>
		<script src="./vendor/vendor/datatables/dataTables.bootstrap.min.js"></script>
		<script src="./vendor/vendor/datatables/custom/custom-datatables.js"></script>
		<script src="./vendor/vendor/datatables/custom/fixedHeader.js"></script>
		<script src="./vendor/vendor/datatables/buttons.min.js"></script>
		<script src="./vendor/vendor/datatables/jszip.min.js"></script>
		<script src="./vendor/vendor/datatables/pdfmake.min.js"></script>
		<script src="./vendor/vendor/datatables/vfs_fonts.js"></script>
		<script src="./vendor/vendor/datatables/html5.min.js"></script>
		<script src="./vendor/vendor/datatables/buttons.print.min.js"></script>
</body>


</html>


