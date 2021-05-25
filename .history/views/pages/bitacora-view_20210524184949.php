<!-- Begin Page Content -->
<div class="container-fluid">
	
    <!-- Content Row -->
    <div class="row">
		<!-- Content Row -->
		
		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-12">
		<?php
			if(isset($_SESSION['usertype_sk']))
			{
			  $tipo_usuario_administrador="1";
			  $tipo_usuario_Instructor="2";
			  $tipo_usuario_alumno="3";
			  if( $_SESSION['usertype_sk']==$tipo_usuario_Instructor){
			      include "views/modules/bitacoraAlumno.php";
			  }
			  if( $_SESSION['usertype_sk']==$tipo_usuario_administrador){
			      include "views/modules/bitacoraProfesor.php";
			      
			  }
			  if( $_SESSION['usertype_sk']==$tipo_usuario_alumno){
			     include "views/modules/bitacoraAlumno.php";
			  }
			}
			else{ var_dump($_SESSION);
			}
			?>
		
		</div>
	</div>  
</div>
