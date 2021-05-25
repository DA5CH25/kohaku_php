<?php 
require_once './models/Roles.dao.php';
/*if($_SESSION['aux_sk'] != 0){
	$_SESSION['aux_sk']=0;
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
	<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4-custom.css" />
		<link href="./vendor/vendor/datatables/buttons.bs.css" rel="stylesheet" />
		<link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="./vendor/fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="./vendor/css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="./vendor/vendor/daterange/daterange.css" />

		<!-- Datepicker css -->
		<link rel="stylesheet" href="./vendor/vendor/datepicker/css/classic.css" />
		<link rel="stylesheet" href="./vendor/vendor/datepicker/css/classic.date.css" />
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
			<div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<!-- Edit Contact Modal -->
							<div class="modal fade" id="editContact" tabindex="-1" role="dialog" aria-labelledby="editContactLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editContactLabel">Agregar documentos</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form class="row gutters">
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="upload-photo-container">
														<img src="./vendor/img/user.png" class="user-thumb" alt="Upload" />
														<div class="form-group m-0">
															<div class="input-group">
                                                            <div class="custom-file">
																	<input type="file" class="custom-file-input" id="uploadPhoto">
																	<label class="custom-file-label" for="uploadPhoto" aria-describedby="uploadPhotoAddon">Selecciona el archivo</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
													<div class="form-group">
														<label for="contactName">Seleccione el tipo de documento:</label>
														<input type="text" class="form-control" id="contactName" value="Seleccione documento">
													</div>
													
												</div>
												</form>
										</div>
										<div class="modal-footer custom">
											<div class="left-side">
												<button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">Cancelar</button>
											</div>
											<div class="divider"></div>
											<div class="right-side">
												<button type="button" class="btn btn-link success btn-block">Cargar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>    
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


