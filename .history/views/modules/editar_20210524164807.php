<?php
$user;
if($_SESSION['aux_sk'] != 0){
	require_once "./controllers/controllerEdit.php";
	$edit = new controllerEdit();
	$user= $edit->user_data($_SESSION['aux_sk']);
	$_SESSION['aux_sk']=0;
	
}
if(isset($_POST['first_name']) && isset($_POST['userid'])  && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['direction']) && isset($_POST['movil']) && isset($_POST['phone']) && isset($_POST['numberdoc']) && $_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['email']!="" && $_POST['pass']!="" && $_POST['direction']!="" && $_POST['movil']!="" && $_POST['phone']!="" && $_POST['numberdoc']!="" && $_POST['userid']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		echo $register->edit_user_controller();	
			
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
									<div class="card-title">EDITAR USUARIO <?php echo $user['id_usuario']; echo $post$user['id_usuario'] ?> </div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<form action="" method="POST">
											<input type = "hidden" name="userid" value="<?php echo $user['id_usuario'] ?>"/> 
											<div class="form-group">
												<label >Nombre</label>
												<input name="first_name" class="form-control" id="first_name" value="<?php if ( isset($user)){echo $user['nombre'];} ?>" placeholder="Nombre"  >
											</div>
											<div class="form-group">
												<label >No. Documento</label>
												<input name="numberdoc" class="form-control" id="numberdoc" value="<?php if ( isset($user)){echo $user['numero_identificacion'];} ?>" placeholder="Documento">
											</div>
											<div class="form-group">
												<label >Telefono Fijo</label>
												<input name="phone" class="form-control" id="phone" value="<?php if ( isset($user)){echo $user['telefono_fijo'];} ?>" placeholder="Telefono Fijo">
											</div>	
											<div class="form-group">
												<label >Direccion</label>
												<input name="direction" class="form-control" id="direction" value="<?php if ( isset($user)){echo $user['direccion'];} ?>" placeholder="Direccion">
											</div>																					
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label >Apellido</label>
												<input name="last_name" class="form-control" id="last_name" value="<?php if ( isset($user)){echo $user['apellido'];} ?>" placeholder="Apellido">
											</div>
											<div class="form-group">
												<label >Correo Electronico</label>
												<input name="email" class="form-control" id="email" value="<?php if ( isset($user)){echo $user['correo_electronico'];} ?>" placeholder="Correo">
											</div>
											<div class="form-group">
												<label>Telefono Celular</label>
												<input name="movil" class="form-control" id="movil" value="<?php if ( isset($user)){echo $user['telefono_movil'];} ?>" placeholder="Telefono Celular">
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



			