<?php 
require_once './models/Roles.dao.php' ;
	if(isset($_POST['useredit']) && $_POST['useredit']!=""){ 
		$_SESSION['aux_sk']= $_POST['useredit'];
	} 
	if(isset($_POST['useredit']) && $_POST['useredit']!=""):?>
	<meta http-equiv="refresh" content="0;url=http://localhost/kohaku_php/?page=useredit">
	<?php endif;
	if(isset($_POST['userdocument']) && $_POST['userdocument']!=""){ 
		$_SESSION['aux_sk']= $_POST['userdocument'];
	} 
	if(isset($_POST['userdocument']) && $_POST['userdocument']!=""):?>
	<meta http-equiv="refresh" content="0;url=http://localhost/kohaku_php/?page=userdocument">
	<?php endif;
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
				<div class="table-container">
					<div class="t-header">
							<span style="font-size:15pt;"> lista de alumnos</span>
							<a class="text-avatar circle sm" style="float: right;" href="/Kohaku_php/?page=usercreate"><span class="icon-user-plus"></span></a>
					</div>
					<div class="table-responsive">
						<table  id="hideSearchExample" class="table custom-table">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Identificacion</th>
								<th>Tel.Fijo</th>
								<th>Celular</th>
								<th>Direccion</th>
								<th>Correo</th>
								<th style="width:100px">Acciones</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach (RolesDAO::listarDatos() as $fila) { ?>
								<tr>
									<td><?= $fila[1] ?></td>
									<td><?= $fila[2] ?></td>
									<td><?= $fila[3] ?></td>
									<td><?= $fila[4] ?></td>
									<td><?= $fila[5] ?></td>
									<td><?= $fila[6] ?></td>
									<td style="width:100px"><?= $fila[7] ?></td>
									<td ><!--<a class="badge badge-success" href="/Kohaku_php/?page=useredit.php?id_usuario=<?=$fila[0]?>">Editar</a>-->
									<div class="input-group">
									<form method="POST">
										<input type = "hidden" name="useredit" value="<?php echo $fila[0] ?>" />
										<button class="badge badge-primary" type= "submit" ><span class="icon-edit-2"></button>
									</form>
									<form method="POST">
										<input type = "hidden" name="userdocument" value="<?php echo $fila[0] ?>" />
										<button class="badge badge-primary" type= "submit" ><span class="icon-edit1"></button>
									</form>
									<form method="POST">
										<input type = "hidden" name="userdelete" value="<?php echo $fila[0] ?>" />
										<button class="badge badge-primary" type= "submit" ><span class="icon-trash-2"></button>
									</form>
									</div></td>
								</tr>
							<?php } ?>
							<tbody>
							
						</table>
						<!--<div class="dataTables_paginate paging_simple_numbers" id="basicExample_paginate">
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
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>


</html>