<?php 
require_once './models/Roles.dao.php';
if($_SESSION['aux_sk'] != 0){
	$_SESSION['aux_sk']=0;
}
?>

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
				<div class="card-title">LISTA DE DOCUMENTOS</div>
			</div>
		<div class="table-container">
		<div class="card-body pt-0 pb-0">
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
				<td><?= $fila[15] ?></td>
				<td><?= $fila[16] ?></td>
				<td><?= $fila[17] ?></td>
                <td>
					<div class="td-actions">
                 		<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Adicionar">
							<i class="icon-circle-with-plus"></i>
						</a>
						<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Eliminar">
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
		<script src="./vendor/vendor/slimscroll/slimscroll.min.js"></script>
		<script src="./vendor/vendor/slimscroll/custom-scrollbar.js"></script>		
		<script src="./vendor/vendor/daterange/daterange.js"></script>
		<script src="./vendor/vendor/daterange/custom-daterange.js"></script>		
		<script src="./vendor/vendor/datepicker/js/picker.js"></script>
		<script src="./vendor/vendor/datepicker/js/picker.date.js"></script>
		<script src="./vendor/vendor/datepicker/js/custom-picker.js"></script>
		<script src="./vendor/js/main.js"></script>
</body>


</html>


