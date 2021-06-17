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
        $tipoBoton='value="Ver Bitacora Completa" class="btn btn-danger"';
        echo '<td><input type="button" '.$tipoBoton.' onclick="mostarBitacoraEditar(' . $row['id_alumno'] . ', ' . $row['id_clase'] . ',' .
                    $idUsuarioSesion .','.$esCrearBitacora.',\'' . $nombreComplatoInstructor.'\',\''. $row['titulo'].'\',\''.$row['observacion'] . ' \')" /></td>';
        echo '</tr>';
    }
}
?>
							
						</tbody>
					</table>
				</div>
			</div>

		
<label id="lblMensajeexito" style="color: green"  ></label>
	
</div>




<div class="card" id="bitacoraEditar" style="display:none"  >
	<div class="card-header">
		<div class="card-title">Instructor: <label id="lblNombreAlumno"  ></label> </div>
		<div class="card-title">Clase: <label id="lblClase"  ></label></div>
		<input type="hidden"  id="hiddenIdAlumno" ></input>
		<input type="hidden"  id="hiddenIdClase" ></input>
		<input type="hidden"  id="hiddenIdProfesor" ></input>
		<input type="hidden"  id="hiddenEsCrear" ></input>
	</div>
	<div class="card-body">

		<div class="form-group">
			<label for="exampleFormControlTextarea1" >Bitacora</label>
			<textarea class="form-control" id="txareaBitacora"  readonly="readonly"
				rows="3"></textarea>
		</div>
		<div>
			<input type="button" value="Cerrar Bitacora" 
				class="btn btn-warning" id="btnCrearActualizrBitacora" onclick="cerrarBitacora()" />
		</div>
	</div>
</div>


<script type="text/javascript">

     function cerrarBitacora(){
    	 var bitacoraEditar = document.getElementById("bitacoraEditar");
     	bitacoraEditar.style.display = "none";//ocultar bitacora
        }
        
        function mostarBitacoraEditar(idAlumno,idClase,idProfesor,esCrear,nombreAlumno,clase,bitacora){
        	document.getElementById('lblNombreAlumno').innerHTML=nombreAlumno;
        	document.getElementById('lblClase').innerHTML=clase;
        	if(bitacora != undefined) {
        		document.getElementById('txareaBitacora').innerHTML=bitacora;
        	}
        	var bitacoraEditar = document.getElementById("bitacoraEditar");
            	bitacoraEditar.style.display = "block";//mostrar bitacora
        }

        </script>
