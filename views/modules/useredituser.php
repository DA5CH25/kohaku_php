<?php 
require_once './models/Roles.dao.php' ;
$sal="";

	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['direction']) && isset($_POST['movil']) && isset($_POST['phone']) && isset($_POST['numberdoc']) && $_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['email']!="" && $_POST['pass']!="" && $_POST['direction']!="" && $_POST['movil']!="" && $_POST['phone']!="" && $_POST['numberdoc']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		$sal= $register->add_user_full_controller();		
	}

	if(isset($_POST['edit_first_name']) && isset($_POST['edit_last_name']) && isset($_POST['edit_pass']) && isset($_POST['edit_direction']) && isset($_POST['edit_movil']) && isset($_POST['edit_phone']) && isset($_POST['edit_numberdoc']) && isset($_POST['edit_userid']) && $_POST['edit_first_name']!="" && $_POST['edit_last_name']!="" && $_POST['edit_pass']!="" && $_POST['edit_direction']!="" && $_POST['edit_movil']!="" && $_POST['edit_phone']!="" && $_POST['edit_numberdoc']!=""&& $_POST['edit_userid']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		$sal= $register->edit_user_controller();		
	}

	if(isset($_POST['delet_userid']) && $_POST['delet_userid']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		$sal= $register->delet_user_controller();		
	}
	/*if(isset($_POST['useredit']) && $_POST['useredit']!=""){ 
		$_SESSION['aux_sk']= $_POST['useredit'];
	} 
	if(isset($_POST['useredit']) && $_POST['useredit']!=""):?>
	<meta http-equiv="refresh" content="0;url=http://localhost/kohaku_php/?page=useredit">
	<?php endif;*/
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

							<button  class="text-avatar circle sm" style="float: right; border-color: white" type= "button"  data-toggle="modal" data-target="#createModal" ><span class="icon-user-plus"></button>

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
							<?php foreach (RolesDAO::listarDatos() as $fila) { 
								if($fila[13]=="1"):?>

								<tr>
									<td><?= $fila[1] ?></td>
									<td><?= $fila[2] ?></td>
									<td><?= $fila[3] ?></td>
									<td><?= $fila[4] ?></td>
									<td><?= $fila[5] ?></td>
									<td><?= $fila[6] ?></td>
									<td style="width:100px"><?= $fila[7] ?></td>
									<td>
									<div class="input-group">
										<button class="badge badge-primary" type= "button"  data-toggle="modal" data-target="#editModal<?php echo $fila[0]?>" style="border-color: white" ><span class="icon-edit-2"></button>
									<form method="POST">
										<input type = "hidden" name="userdocument" value="<?php echo $fila[0] ?>" />
										<button class="badge badge-primary" type= "submit" style="border-color: white" ><span class="icon-edit1"></button>
									</form>
										<button class="badge badge-primary"  type= "button"  data-toggle="modal" data-target="#deletModal<?php echo $fila[0]?>" style="border-color: white" ><span class="icon-trash-2"></button>
									</div></td>

									
									<div class="modal fade" id="editModal<?php echo $fila[0]?>" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="basicModalLabel">Editar usuario</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												
												<div class="modal-body">

													<form form action="http://localhost/kohaku_php/?page=userupdate" method="POST" >
														<div>
															<label >Nombre</label>
															<input type="text" name="edit_first_name" class="form-control" id="edit_first_name" value="<?php echo $fila[1]?>">
														</div>
														<div>
															<label >Apellido</label>
															<input type="text" name="edit_last_name" class="form-control" id="edit_last_name" value="<?php echo $fila[2]?>">
														</div>
														<div>
															<label >No. Documento</label>
															<input type="text" name="edit_numberdoc" class="form-control" id="edit_numberdoc" value="<?php echo $fila[3]?>">
														</div>
														<div>
															<label >Telefono Fijo</label>
															<input type="text" name="edit_phone" class="form-control" id="edit_phone" value="<?php echo $fila[4]?>">
														</div>
														<div>
															<label>Telefono Celular</label>
															<input type="text" name="edit_movil" class="form-control" id="edit_movil" value="<?php echo $fila[5]?>">
														</div>		
														<div>
															<label >Correo Electronico</label>
															<input type="text" name="edit_email" class="form-control" id="edit_email" value="<?php echo $fila[7]?>" disabled>
														</div>
														<div>
															<label >Direccion</label>
															<input type="text" name="edit_direction" class="form-control" id="edit_direction" value="<?php echo $fila[6]?>">
														</div>
														<div>
															<label >Nueva Clave</label>
															<input type="text" name="edit_pass" class="form-control" id="edit_pass">
														</div>											
														</div>

														<div>
															<input type="hidden" name="edit_userid" class="form-control" id="edit_userid" value="<?php echo $fila[0]?>">

															<button style="float: right;"  type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
															<button style="float: right;" class="btn btn-primary" type="submit" >Editar</button>
															
														</div>

													</form>
												</div>
											</div>
										</div>
									</div>


									<div class="modal fade" id="deletModal<?php echo $fila[0]?>" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="basicModalLabel">Desactivar cuenta</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												
												<div class="modal-body">
													<form form action="http://localhost/kohaku_php/?page=userupdate" method="POST" >
														<div>
															<label >¿realmente desea desactivar la cuenta con los siguientes datos?</label>
														</div>
														<div>
															<p>Nombre: <?php echo $fila[1]?><br>Apellido: <?php echo $fila[2]?><br>No. Documento: <?php echo $fila[3]?><br>Telefono Fijo: <?php echo $fila[4]?><br>Telefono Celular: <?php echo $fila[5]?><br>Correo Electronico: <?php echo $fila[7]?><br>Direccion: <?php echo $fila[6]?><br></p>
															
																									
														</div>

														<div>
															<input type="hidden" name="delet_userid" class="form-control" id="delet_userid" value="<?php echo $fila[0]?>">

															<button style="float: right;"  type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
															<button style="float: right;" class="btn btn-primary" type="submit" >desactivar</button>
															
														</div>

													</form>
											</div>
										</div>
									</div>

								</tr>
							<?php endif;
						} ?>
							<tbody>
							
						</table>




					</div>
				</div>
			</div>
		</div>
	</div>
	

							<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" >

												
											<div class="modal-header">
												<h5 class="modal-title" id="basicModalLabel">Creacion de nuevo usuario</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											
											<div class="modal-body">

												<form action="http://localhost/kohaku_php/?page=userupdate" method="POST" >
													<div>
														<label >Nombre</label>
														<input name="first_name" class="form-control" id="first_name" placeholder="Nombre">
													</div>
													<div>
														<label >Apellido</label>
														<input name="last_name" class="form-control" id="last_name" placeholder="Apellido">
													</div>
													<div>
														<label >No. Documento</label>
														<input name="numberdoc" class="form-control" id="numberdoc" placeholder="Documento">
													</div>
													<div>
														<label >Telefono Fijo</label>
														<input name="phone" class="form-control" id="phone" placeholder="Telefono Fijo">
													</div>
													<div>
														<label>Telefono Celular</label>
														<input name="movil" class="form-control" id="movil" placeholder="Telefono Celular">
													</div>		
													<div>
														<label >Correo Electronico</label>
														<input name="email" class="form-control" id="email" placeholder="Correo">
													</div>
													<div>
														<label >Direccion</label>
														<input name="direction" class="form-control" id="direction" placeholder="Direccion">
													</div>
													<div>
														<label >Clave</label>
														<?php
														$DesdeLetra = "a";
														$HastaLetra = "z";
														$DesdeNumero = 0;
														$HastaNumero = 9;
														$Salida="";
														for( $i=0 ; $i<3 ; $i++)
														{
														$letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
														$numeroAleatorio = rand($DesdeNumero, $HastaNumero);
														$Salida=$Salida.$numeroAleatorio.$letraAleatoria;
														}
														?>
														<input type="text" name="pass" class="form-control" id="pass" value="<?php echo $Salida ?>" >
													</div>											
													</div>

													<div>

														<button style="float: right;"  type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
														<button style="float: right;" class="btn btn-primary" type="submit" >Guardar</button>
														
													</div>

												</form>
											</div>

									</div>
								</div>
							</div>


</body>


</html>