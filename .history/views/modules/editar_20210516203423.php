<?php 
	require_once './models/Roles.dao.php';
	$roles = new RolesDAO();
	$rol = $roles->buscarPorId($_GET['id_usuario']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	</head>
<body>
	<header>
		<h1>Roles</h1>
		<h2>Editar</h2>
	</header>

	<form action="./controllers/Roles.controlador.php?a=edit" method="POST">
		<input type="hidden" name="id_usuario" value="<?=$rol[0]?>" />
		<input name="nombre" placeholder="Nombre" value="<?=$rol[1]?>" />
		<input type="submit" value="Editar" />
	</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">FORMULARIO CREACION DE USUARIO</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<form action="" method="POST">
											<div class="form-group">
												<label for="fullName">Nombre</label>
												<input name="nombre" class="form-control" id="fullName" placeholder="Nombre">
											</div>
											<div class="form-group">
												<label for="eMail">No. Documento</label>
												<input name="numero_identificacion" class="form-control" id="eMail" placeholder="Documento">
											</div>
											<div class="form-group">
												<label for="phone">Telefono Fijo</label>
												<input name="telefono_fijo" class="form-control" id="phone" placeholder="Telefono Fijo">
											</div>	
											<div class="form-group">
												<label for="addRess">Direccion</label>
												<input name="direccion" class="form-control" id="addRess" placeholder="Direccion">
											</div>																					
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Apellido</label>
												<input name="apellido" class="form-control" id="fullName" placeholder="Apellido">
											</div>
											<div class="form-group">
												<label for="ciTy">Correo Electronico</label>
												<input name="correo_electronico" class="form-control" id="ciTy" placeholder="Correo">
											</div>
											<div class="form-group">
												<label for="website">Telefono Celular</label>
												<input name="telefono_movil" class="form-control" id="website" placeholder="Telefono Celular">
											</div>
											<div class="form-group">
												<label for="sTate">Clave</label>
												<input name="clave" class="form-control" id="sTate" placeholder="Clave">
											</div>											
											</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
											    <input class="btn btn-white" type="reset" value="Cancelar"> 
												<input class="btn btn-primary" type="submit" value="Guardar" />
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				
</body>
</html>



			