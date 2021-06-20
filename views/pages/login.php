<?php
     @session_start(['name'=>'sk']);
	if(isset($_POST['loginemail']) && isset($_POST['loginpass']) && $_POST['loginemail']!="" &&$_POST['loginpass']!="" ){
		require_once "./controllers/controllerLogin.php";
		$login = new controllerLogin();
		$url =  $login->start_session_controller();
		header('Location: ' .  $url );
		echo $url;
		//var_dump($_SESSION);
	}
	elseif(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass_confirm']) && $_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['email']!="" && $_POST['pass']!="" && $_POST['pass_confirm']!="")
	{
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		//echo $register->add_user_controller();
		$url = $register->add_user_controller();
		header('Location: ' .  $url );
		echo $url;
	}
	else{
		require_once"./controllers/controllerLogin.php";
		$login = new controllerLogin();
		echo $login->close_session_controller();
	}
?>

<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>KOHAKU</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href="./views/css/loginstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container" overflow: auto >

		<form action="" method="post" overflow: auto>
			<h1 style="color: #FFFFFF">Crear cuenta</h1>
			<!--<span>Registrarte con tu correo electronico</span>-->
			<span>Nombre</span>
			<input type="text" placeholder="Ejemplo" id="first_name" name= "first_name" />
			<span>Apellido</span>
			<input type="text" placeholder="Ejemplo" id="last_name" name="last_name">
			<!--<select  name = "id_type" name = "id_type">
				<option value="0" selected>tipo de documento</option>
				<option value="1">Cedula de Ciudadadania</option>
				<option value="2">Cedula de Extranjeria</option>
				<option value="3">Tarjeta de Identidad</option>
			<input type="text" placeholder="Numero de Documento" id="id_number" name="id_number"/>
			<input type="text" placeholder="Direccion" id="direction" name="direction"/>
			<input type="text" placeholder="Telefono Fijo" id="phone" name="phone"/>
			<input type="text" placeholder="celular" id="celphone"name="cellphone"/>-->
			<span>Correo electronico</span>
			<input type="email" placeholder="Ejemplo@Ejemplo.com" id="email" name="email"/>
			<span>Contraseña</span>
			<input type="password" placeholder="Ejemplo" id="pass" name="pass"/>
			<span>Confirma contraseña</span>
			<input type="password" placeholder="Ejemplo" id="pass_confirm" name= "pass_confirm"/>

			<button type= "submit" value ="Registro">Registrarse</button>

		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="POST" autocomplete="off">
			<h1 style="color: #FFFFFF">Iniciar sesión</h1>
			<div class="social-container">
				<!--<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>-->
			</div>
			<span>Correo Electronico</span>
            <!-- name="loginemail" name="loginpass" -->
			<input type="email" placeholder="Correo electronico" id="loginemail" name="loginemail" value="" />
			<span>Contraseña</span>
			<input type="password" placeholder="Contraseña" id="loginpass" name="loginpass" value="" />
		<a style="color: #FFFFFF" href="#">Olvidaste tu contraseña?</a>
			<button type="submit" value="login">Ingresar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<img src="./views/assets/img/logokohakublanco.png" width="250" height="250">
				<p>Ingrese sus datos personales y comience con nosotros</p>			 
				<button class="ghost" id="signIn">Iniciar sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<img src="./views/assets/img/logokohakublanco.png" width="250" height="250">
				<p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
				<button class="ghost" id="signUp">Inscribirse</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
<!-- partial -->
  <script  src="./views/js/loginscript.js"></script>
  <script  src="./views/js/main.js"></script>

</body>


</html>
