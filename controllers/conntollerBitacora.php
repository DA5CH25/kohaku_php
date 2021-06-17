   <?php
   
   
$idUsuarioSesion = $_SESSION['userid_sk'];
$sql = "SELECT alumno.nombre as nombre_alumno, alumno.apellido as apellido_alumno, cls.titulo, inst.nombre as nombre_instructor, 
inst.apellido as apellido_instructor, bta.observacion, bta.fecha, alumno.id_usuario as id_alumno, cls.id as id_clase
FROM usuario_has_clases uhc
INNER JOIN usuario alumno ON alumno.id_usuario=uhc.usuario_id_usuario
INNER JOIN clase cls ON cls.id=uhc.clases_id_clases
INNER JOIN usuario inst ON inst.id_usuario=cls.id_instructor
LEFT JOIN bitacora bta ON bta.usuario_id_usuario=alumno.id_usuario and bta.clases_id_clases=cls.id
where cls.id_instructor=" . $idUsuarioSesion . ";";
if ($conexion->query($sql)->num_rows) {
    $resultadoConsulta = $conexion->query($sql);
    $i = 0;
    while ($row = $resultadoConsulta->fetch_array()) {
        $i ++;
        echo '<tr>';
        echo '<td>' . $row['nombre_instructor'] . ' ' . $row['apellido_instructor'] . '</th>';
        echo '<td>' . $row['titulo'] . '</td>';
        echo '<td>' . $row['nombre_alumno'] . ' ' . $row['apellido_alumno'] . '</th>';
        echo '<td><input type="text" class="form-control form-control-user" id="bitacora' . $i . '" name="dni" value="' . $row['observacion'] . '"  /></td>';
        echo '<td>' . $row['fecha'] . '</td>';
        if ($row['fecha'] == null) {
            echo '<td><input type="button" value="Crear Bitacora" onclick="crearBitacora(' . $row['id_alumno'] . ', ' . $row['id_clase'] . ',' . $i . ',' . $idUsuarioSesion . ',' . $row['fecha'] . ')" /></td>';
        } else {
            echo '<td><input type="button" value="Actualizar Bitacora" onclick="crearBitacora(' . $row['id_alumno'] . ', ' . $row['id_clase'] . ',' . $i . ',' . $idUsuarioSesion . ',' . $row['fecha'] . ')" /></td>';
        }
        echo '</tr>';
    }
}
?>