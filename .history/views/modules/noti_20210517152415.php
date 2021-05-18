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
<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-eye1"></i>
								</div>
								<div class="sale-num">
									<h3>9500</h3>
									<p>Visitas</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
								<div class="sale-num">
									<h3>2500</h3>
									<p>Compras</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-bag1"></i>
								</div>
								<div class="sale-num">
									<h3>7500</h3>
									<p>Clases</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h3>3500</h3>
									<p>Cinturones Negros</p>
								</div>
							</div>
						</div>
					</div>
<div class="main-container">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
            <div class="col-xl-3 col-lg-3 col-md-1 col-sm-1 col-3">
           	<h1 class="display-4 pb-5">Bienvenido</h1>
            </div>
        <div class="table-container">
		<div class="card-body pt-0 pb-0">
		<div class="table-responsive">
	<table class="table table-hover table-bordered custom-table" >
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Identificacion</th>
			<th>Tel.Fijo</th>
			<th>Celular</th>
			<th>Direccion</th>
			<th>Correo</th>
			<th colspan="3">Opciones</th>
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
				<td><a class="badge badge-success" href="/Kohaku_php/?page=useredit.php?id_usuario=<?=$fila[0]?>">Editar</a></td>
				<td><a class="badge badge-success" href="/Kohaku_php/?page=useredit.php?id_usuario=<?=$fila[0]?>">Agregar Documentos</a></td>
				<td><a class="badge badge-danger" href="./controllers/Roles.controlador.php?a=elim&id_usuario=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
			</tr>
		<?php } ?>
		
	</table>
	<div class="dataTables_paginate paging_simple_numbers" id="basicExample_paginate">
	<ul class="pagination pagination-sm">
	<li class="paginate_button page-item previous disabled" id="basicExample_previous">
	<a href="#" aria-controls="basicExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
	</li>
	<li class="paginate_button page-item active">
	<a href="#" aria-controls="basicExample" data-dt-idx="1" tabindex="0" class="page-link">1</a>
	</li>
	<li class="paginate_button page-item ">
	<a href="#" aria-controls="basicExample" data-dt-idx="2" tabindex="0" class="page-link">2</a>
	</li><li class="paginate_button page-item ">
	<a href="#" aria-controls="basicExample" data-dt-idx="3" tabindex="0" class="page-link">3</a>
	</li>
	<li class="paginate_button page-item ">
	<a href="#" aria-controls="basicExample" data-dt-idx="4" tabindex="0" class="page-link">4</a>
	</li><li class="paginate_button page-item ">
	<a href="#" aria-controls="basicExample" data-dt-idx="5" tabindex="0" class="page-link">5</a>
	</li>
	<li class="paginate_button page-item disabled" id="basicExample_ellipsis">
	<a href="#" aria-controls="basicExample" data-dt-idx="6" tabindex="0" class="page-link">…</a>
	</li>
	<li class="paginate_button page-item ">
	<a href="#" aria-controls="basicExample" data-dt-idx="7" tabindex="0" class="page-link">15</a>
	</li>
	<li class="paginate_button page-item next" id="basicExample_next">
	<a href="#" aria-controls="basicExample" data-dt-idx="8" tabindex="0" class="page-link">Next</a>
	</li>
	</ul>
	</div>
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