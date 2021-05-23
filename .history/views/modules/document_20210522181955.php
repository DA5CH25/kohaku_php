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
			<th>Tel.Fijo</th>
			<th>Celular</th>
			<th>Direccion</th>
			<th>Correo</th>
			<th colspan="3">Opciones</th>
		</tr>
		<?php foreach (RolesDAO::listarDocument() as $fila) { ?>
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


<div class="table-container">
								<div class="table-responsive">
									<table class="table custom-table m-0">
										<thead>
											<tr>
												<th>Nro.</th>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>No. Documento</th>
												<th>Foto</th>
												<th>Fotocopia Documento</th>
												<th>Hoja de Vida</th>
                                                <th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td>1. USA</td>
												<td>327</td>
												<td>229</td>
												<td>$139.85</td>
												<td>21.55%</td>
												<td>USD 980</td>
                                                <td>USD 980</td>
												<td>
													<div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Adicionar">
															<i class="icon-circle-with-plus"></i>
														</a>
														<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Guardar">
															<i class="icon-save"></i>
														</a>
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Eliminar">
															<i class="icon-cancel"></i>
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>2. India</td>
												<td>578</td>
												<td>375</td>
												<td>$89,319</td>
												<td>46.90%</td>
												<td>USD 887</td>
                                                <td>USD 887</td>
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
											<tr>
												<td>3. Australia</td>
												<td>126</td>
												<td>845</td>
												<td>$68.00</td>
												<td>16.25%</td>
												<td>USD 685</td>
                                                <td>USD 685</td>
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
										</tbody>
									</table>
								</div>
							</div>