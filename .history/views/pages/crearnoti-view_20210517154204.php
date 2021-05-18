<div class="container-fluid">
	<!-- Page Heading 
		<div class="d-sm-flex align-items-center justify-content-start mb-4">
            
            <a href="#" class="d-none mr-2 d-sm-inline-block btn btn-sm btn-kohaku shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i> Crear Clase
            </a>
			<a href="#" class="d-none mr-2 d-sm-inline-block btn btn-sm btn-kohaku shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i> Registar Clase
            </a>
        </div>-->
		
    <!-- Content Row -->
    <div >
		<!-- Content Row -->
		
		<!-- Area Chart -->
		<div > 
			<?php
			if(isset($_SESSION['usertype_sk']))
			{
			  $tipo_usuario_administrador="1";
			  $tipo_usuario_alumno="3";
			  if( $_SESSION['usertype_sk']==$tipo_usuario_alumno){
			      include "views/modules/noti.php";			     
			  }
			  if( $_SESSION['usertype_sk']==$tipo_usuario_administrador){
				include "views/modules/noti.php";
			  }
			}
			?>			
		</div>
	</div>  
</div>
