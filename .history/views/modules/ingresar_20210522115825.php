<?php
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass_confirm']) && $_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['email']!="" && $_POST['pass']!="" && $_POST['pass_confirm']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		//echo $register->add_user_controller();
		$url = $register->add_user_controller();
		header('Location: ' .  $url );
		echo $url;
	}

!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
<div class="main-container">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">FORMULARIO CREACION DE USUARIO</div>
								</div>
								<form action="./controllers/Roles.controlador.php?a=ingr" method="POST">
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
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>



			