<div class="container-fluid">
	<!-- Page Heading -->
		
		
    <!-- Content Row -->
    <div class="row">
		<!-- Content Row -->
		
		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-12">
			<?php
			if(isset($_SESSION['usertype_sk']))
			{
			  $TIPO_USUARIO_ALUNMO="3";
			  if( $_SESSION['usertype_sk']==$TIPO_USUARIO_ALUNMO){
			      include "views/modules/selecionarClasesAlumno.php";
			  }else{
			     include "views/modules/agendarClasesAdministrador.php";
			  }
			}
			?>

			
		</div>
	</div>  
</div>
