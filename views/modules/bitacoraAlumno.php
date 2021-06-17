<?php

// Definimos nuestra zona horaria
date_default_timezone_set("America/Santiago");

// incluimos el archivo de funciones
include 'util/funciones.php';

// incluimos el archivo de configuracion
include 'config/config.php';

$base_url = 'vendor/';

$mostrar_editar_bitacora='style="display:none"';

?>
	<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="<?php $base_url?>js/jquery.min.js"></script>
		<script src="<?php $base_url?>js/bootstrap.bundle.min.js"></script>
		<script src="<?php $base_url?>js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="<?php $base_url?>vendor/slimscroll/slimscroll.min.js"></script>
		<script src="<?php $base_url?>vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="<?php $base_url?>vendor/daterange/daterange.js"></script>
		<script src="<?php $base_url?>vendor/daterange/custom-daterange.js"></script>

		<!-- Summernote JS -->
		<script src="<?php $base_url?>vendor/summernote/summernote-bs4.js"></script>


		<!-- Main Js Required -->
		<script src="<?php $base_url?>js/main.js"></script>

		<script>
			$(document).ready(function() {
				$('.summernote').summernote({
					height: 170,
					tabsize: 2
				});
			});
		</script>


<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://codeseven.github.com/toastr/toastr.js"></script>
<link href="http://codeseven.github.com/toastr/toastr.css"
	rel="stylesheet" />
<link href="http://codeseven.github.com/toastr/toastr-responsive.css"
	rel="stylesheet" />
<!-- Card Content -->
<div class="card shadow mb-5 ">
	<!-- Card Header - Dropdown -->
	<div
		class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
		<div class="form-group row mb-0">
			<h1 class="h4 mb-0 text-white-800 text-center text-dark">Bitacora</h1>
		</div>
	</div>

	
			<div class="table-container">
				<div class="table-responsive">
					<table class="table custom-table m-0">
						<thead>
							<tr>
						    	<th>Clase</th>
								<th>Instructor</th>
								<th>Alumno</th>
								<th>Bitacora</th>
								<th>Fecha</th>
								<th>Boton</th>
							</tr>
						</thead>
						<tbody>
						   <?php
            $idUsuarioSesion = $_SESSION['userid_sk'];
            $sql = "SELECT alumno.nombre as nombre_alumno, alumno.apellido as apellido_alumno, cls.titulo, inst.nombre as nombre_instructor, 
            inst.apellido as apellido_instructor, bta.observacion, bta.fecha, alumno.id_usuario as id_alumno, cls.id as id_clase
            FROM usuario_has_clases uhc
            INNER JOIN usuario alumno ON alumno.id_usuario=uhc.usuario_id_usuario
            INNER JOIN clase cls ON cls.id=uhc.clases_id_clases
            INNER JOIN usuario inst ON inst.id_usuario=cls.id_instructor
            Inner JOIN bitacora bta ON bta.usuario_id_usuario=alumno.id_usuario and bta.clases_id_clases=cls.id
            where alumno.id_usuario=" . $idUsuarioSesion . " order by  cls.titulo;";
           if ($conexion->query($sql)->num_rows) {
          $resultadoConsulta = $conexion->query($sql);
          $i = 0;
          while ($row = $resultadoConsulta->fetch_array()) {
        $i ++;
        echo '<tr>';
        echo '<td>' . $row['titulo'] . '</td>';
        echo '<td>' . $row['nombre_instructor'] . ' ' . $row['apellido_instructor'] . '</th>';
        $nombreComplatoInstructor=$row['nombre_instructor'] . ' ' . $row['apellido_instructor'];
        echo '<td>' . $row['nombre_alumno'] . ' ' . $row['apellido_alumno']. '</th>';
        if(strlen($row['observacion'] )>50 ){
            echo '<td>' .substr($row['observacion'] , 0, 50) .'...'. '</td>';
        }else{
            echo '<td>' .$row['observacion']. '</td>';
        }
        echo '<td>' . $row['fecha'] . '</td>';
        $esCrearBitacora=0;
        $tipoBoton='value="Ver Bitacora" class="btn btn-danger"';
        echo '<td><button type="button" data-toggle="modal"  data-target="#bitacoraModal" '.$tipoBoton.' onclick="mostarBitacoraEditar(\''. $nombreComplatoInstructor.'\',\''. $row['titulo'].'\',\''.$row['observacion'].'\')" ><span class="icon-book-open"></span></button>

</td>';
        echo '</tr>';
    }
}
?>
							
						</tbody>
					</table>
				</div>
			</div>
         <!-- Modal -->
									<div class="modal fade" id="bitacoraModal" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="customModalTwoLabel">Crear Bitacora</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form>
												    	<input type="hidden"  id="hiddenIdAlumno" ></input>
		                                                <input type="hidden"  id="hiddenIdClase" ></input>
		                                                <input type="hidden"  id="hiddenIdProfesor" ></input>
		                                                <div class="form-group">
															<label  class="col-form-label">Alumno:</label>
															<label class="col-form-label" id="lblNombreAlumno" ></label>
														</div>
														<div class="form-group">
															<label class="col-form-label">Clase: </label>
															<label class="col-form-label" id="lblClase" ></label>
														</div>
	                                                     
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Bitacora</label>
															<textarea class="form-control" id="txareaBitacora"	rows="3" readonly="readonly" ></textarea>
														</div>
														
													</form>
												</div>
												<div class="modal-footer custom">
													
													<div class="left-side">
														
													</div>
													
													<div class="right-side">
													<button type="button" class="btn btn-link success" data-dismiss="modal">Cerrar</button>
													</div>
												</div>
											</div>
										</div>
									</div>
		
<label id="lblMensajeexito" style="color: green"  ></label>
	
</div>

	                   

	         <script type="text/javascript">

							 function mostarBitacoraEditar(nombreAlumno,clase,observacion){
						        	document.getElementById('lblNombreAlumno').innerHTML=nombreAlumno;
						        	document.getElementById('lblClase').innerHTML=clase;
						        	document.getElementById('txareaBitacora').innerHTML=observacion;
						        	$('#bitacoraModal').modal('show');
						        }


				</script>
				
				
			