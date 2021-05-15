<?php


// Definimos nuestra zona horaria
date_default_timezone_set("America/Santiago");

// incluimos el archivo de funciones
include 'util/funciones.php';

// incluimos el archivo de configuracion
include 'config/config.php';

$base_url='vendor/calendario/';


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://codeseven.github.com/toastr/toastr.js"></script>
<link href="http://codeseven.github.com/toastr/toastr.css" rel="stylesheet"/>
<link href="http://codeseven.github.com/toastr/toastr-responsive.css" rel="stylesheet"/>
<!-- Card Content -->
<div class="card shadow mb-5 ">
	<!-- Card Header - Dropdown -->
	<div
		class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
		<div class="form-group row mb-0">
			<h1 class="h4 mb-0 text-white-800 text-center text-dark">
				Bitacora</h1>
		</div>
	</div>

	<!-- Card Body -->
	<div
		class="card-body py-3 d-flex flex-row align-items-center justify-content-center">
		<div class="row">
				<table class="table">
					<thead>
						<tr>
						    <th scope="col">Instructor</th>
							<th scope="col">Clase</th>
							<th scope="col">Alumno</th>
							<th scope="col">Bitacora</th>
							<th scope="col">Fecha</th>
							<th scope="col">Botom</th>
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
LEFT JOIN bitacora bta ON bta.usuario_id_usuario=alumno.id_usuario and bta.clases_id_clases=cls.id
where cls.id_instructor=".$idUsuarioSesion.";";
if ($conexion->query($sql)->num_rows) {
    $resultadoConsulta = $conexion->query($sql);
    $i = 0;
    while ($row = $resultadoConsulta->fetch_array()) {
        $i ++;
        echo '<tr>';
        echo '<td>' . $row['nombre_instructor'] .' '.$row['apellido_instructor'] . '</th>';
        echo '<td>' . $row['titulo'] . '</td>';
        echo '<td>' . $row['nombre_alumno'] .' '.$row['apellido_alumno'] . '</th>';
        echo '<td><input type="text" class="form-control form-control-user" id="bitacora'.$i.'" name="dni" value="' . $row['observacion'] . '"  /></td>';
        echo '<td>' . $row['fecha'] . '</td>';
        if($row['fecha']==null){
            echo '<td><input type="button" value="Crear Bitacora" onclick="crearBitacora(' . $row['id_alumno'] . ', ' . $row['id_clase'] . ','.$i.','.$idUsuarioSesion.','.$row['fecha'].')" /></td>';
        }else{
            echo '<td><input type="button" value="Actualizar Bitacora" onclick="crearBitacora(' . $row['id_alumno'] . ', ' . $row['id_clase'] . ','.$i.','.$idUsuarioSesion.','.$row['fecha'].')" /></td>';
        }
        echo '</tr>';
    }
}
?>
  </tbody>
				</table>
  <script type="text/javascript">
        function crearBitacora(idAlumno, idClase, idBitacora,idProfesor,fecha){
            var esNuevaBitacora=false;
            var mensajeExito="Actualizado Exitosamente";
            if(fecha === undefined) {
            	esNuevaBitacora=true;
            	var mensajeExito="Creado Exitosamente";
            }
        	var textoBitacora=document.getElementById('bitacora'+idBitacora).value;
            $.ajax({
                type: "POST",
                url: "models/guardarBitacora.php",
                data: { id_alumno: idAlumno,id_clase : idClase,texto_bitacora : textoBitacora, id_profesor : idProfesor, es_nueva_bitacora : esNuevaBitacora}
              }).done(function( msg ) {
            	  window.location.replace("?page=bitacora");
            	  alert(mensajeExito);
              });
        }
        
        </script>
    
		</div>
	</div>
</div>
