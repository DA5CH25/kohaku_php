<?php



// incluimos el archivo de configuracion
include '../config/config.php';


if(isset($_POST) )
{
    
    $id_alumno=$_POST['id_alumno'];
    $id_clase=$_POST['id_clase'];
    $texto_bitacora=$_POST['texto_bitacora'];
    $id_profesor=$_POST['id_profesor'];
    $fecha=date('d-m-y');
    $es_nueva_bitacora= $_POST['es_nueva_bitacora'];
    if($es_nueva_bitacora=='true'){
      $query="INSERT INTO bitacora (observacion,usuario_id_usuario,clases_id_clases,fecha,id_profesor) VALUES('$texto_bitacora','$id_alumno','$id_clase','$fecha','$id_profesor')";
    }else{
       $query="update bitacora  set observacion='$texto_bitacora', fecha='$fecha'  where usuario_id_usuario='$id_alumno' and clases_id_clases='$id_clase' and id_profesor='$id_profesor';";
    }
    
    // Ejecutamos nuestra sentencia sql
    $conexion->query($query)or die('<script type="text/javascript">alert("No se pudo agragar la bitacora ")</script>');
    
    
}
