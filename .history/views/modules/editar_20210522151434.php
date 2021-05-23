<?php
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['direction']) && isset($_POST['movil']) && isset($_POST['phone']) && isset($_POST['numberdoc']) && $_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['email']!="" && $_POST['pass']!="" && $_POST['direction']!="" && $_POST['movil']!="" && $_POST['phone']!="" && $_POST['numberdoc']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		echo $register->add_user_full_controller();		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
</head>
<body>
<div class="main-container">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">EDITAR USUARIO</div>
								</div>
								<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<select class="form-control">
													<option>Default select</option>
												</select>
											</div>
										</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<form action="" method="POST">
											<div class="form-group">
												<label >Nombre</label>
												<input name="first_name" class="form-control" id="first_name" placeholder="Nombre">
											</div>
											<div class="form-group">
												<label >No. Documento</label>
												<input name="numberdoc" class="form-control" id="numberdoc" placeholder="Documento">
											</div>
											<div class="form-group">
												<label >Telefono Fijo</label>
												<input name="phone" class="form-control" id="phone" placeholder="Telefono Fijo">
											</div>	
											<div class="form-group">
												<label >Direccion</label>
												<input name="direction" class="form-control" id="direction" placeholder="Direccion">
											</div>																					
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label >Apellido</label>
												<input name="last_name" class="form-control" id="last_name" placeholder="Apellido">
											</div>
											<div class="form-group">
												<label >Correo Electronico</label>
												<input name="email" class="form-control" id="email" placeholder="Correo">
											</div>
											<div class="form-group">
												<label>Telefono Celular</label>
												<input name="movil" class="form-control" id="movil" placeholder="Telefono Celular">
											</div>
											<div class="form-group">
												<label >Clave</label>
												<input name="pass" class="form-control" id="pass" placeholder="Clave">
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
				</div>
			</div>
</body>
</html>



			