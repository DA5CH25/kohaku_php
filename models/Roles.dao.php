<?php
require_once './models/Conexion.clase.php';
require_once './models/Rol.clase.php'; 
if($petitionAjax){
	require_once "../config/mainModel.php";
}else{
	// si la eticion ajax es fale aceder a la configuración DB
	require_once "./config/mainModel.php";
}

class RolesDAO extends mainModel{
	public static function listarDatos () {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta('SELECT * FROM usuario');
		$con->cerrarConexion();
		return $cont;
	}

	public static function listarDocument () {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta('SELECT * FROM usuario INNER JOIN documento ON usuario.id_usuario = documento.usuario_id_usuario');
		$con->cerrarConexion();
		return $cont;
	}

	public static function ingresarDato ($rol) {
		$con = new Conexion();
		$con->ejecutarActualizacion("INSERT INTO usuario (nombre, apellido, numero_identificacion, telefono_fijo, telefono_movil, direccion,correo_electronico, clave ) VALUES ('$rol->nombre','$rol->apellido','$rol->numero_identificacion','$rol->telefono_fijo','$rol->telefono_movil','$rol->direccion', '$rol->correo_electronico','$rol->clave')");
		$con->cerrarConexion();
	}

	public function buscarPorId ($id) {
		$sql=mainModel::connect()->prepare("SELECT * FROM usuario WHERE id_usuario=:iduser");
		$sql->bindParam(':iduser',$id);
		$sql->execute();
		return $sql->fetch();
	
	}

	public static function editarDato ($rol) {
		$con = new Conexion();
		$con->ejecutarActualizacion("UPDATE usuario SET Nombre = '$rol->nombre' WHERE id_usuario = $rol->id_usuario");
		$con->cerrarConexion();
	}

	public static function eliminarPorId ($id) {
		$con = new Conexion();
		$con->ejecutarActualizacion("DELETE FROM usuario WHERE id_usuario = $id_usuario");
		$con->cerrarConexion();
	}
	
	public static function list_for_name_model($nombre) {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE nombre = '$nombre'");
		$con->cerrarConexion();
		return $cont;
	}
	public static function listarAlumnosBitacoraPorNombre($idUsuarioSesion,$nombre) {
	    $con = new Conexion();
	    $cont = $con->ejecutarConsulta("SELECT distinct alumno.nombre as nombre_alumno, alumno.apellido as apellido_alumno, alumno.correo_electronico, cls.titulo,cls.inicio_normal, inst.nombre as nombre_instructor,
            inst.apellido as apellido_instructor,  alumno.id_usuario as id_alumno, cls.id as id_clase
            FROM usuario_has_clases uhc
            INNER JOIN usuario alumno ON alumno.id_usuario=uhc.usuario_id_usuario
            INNER JOIN clase cls ON cls.id=uhc.clases_id_clases
            INNER JOIN usuario inst ON inst.id_usuario=cls.id_instructor
            LEFT JOIN bitacora bta ON bta.usuario_id_usuario=alumno.id_usuario and bta.clases_id_clases=cls.id
            where cls.id_instructor=" . $idUsuarioSesion . " and alumno.nombre= '".$nombre."' order by  cls.titulo;");
	    $con->cerrarConexion();
	    return $cont;
	}
	
	public static function listarAlumnosBitacora($idUsuarioSesion) {
	    $con = new Conexion();
	    $cont = $con->ejecutarConsulta("SELECT distinct alumno.nombre as nombre_alumno, alumno.apellido as apellido_alumno, alumno.correo_electronico, cls.titulo,cls.inicio_normal, inst.nombre as nombre_instructor,
            inst.apellido as apellido_instructor,  alumno.id_usuario as id_alumno, cls.id as id_clase
            FROM usuario_has_clases uhc
            INNER JOIN usuario alumno ON alumno.id_usuario=uhc.usuario_id_usuario
            INNER JOIN clase cls ON cls.id=uhc.clases_id_clases
            INNER JOIN usuario inst ON inst.id_usuario=cls.id_instructor
            LEFT JOIN bitacora bta ON bta.usuario_id_usuario=alumno.id_usuario and bta.clases_id_clases=cls.id
            where cls.id_instructor=" . $idUsuarioSesion . " order by  cls.titulo;");
	    $con->cerrarConexion();
	    return $cont;
	}
	
	public static function listarAlumnosBitacoraProFecha($idUsuarioSesion,$fecha) {
	    $fechaFormateada = explode("-", $fecha)[2]."/".explode("-", $fecha)[1]."/".explode("-", $fecha)[0];
	    $con = new Conexion();
	    $cont = $con->ejecutarConsulta("SELECT distinct alumno.nombre as nombre_alumno, alumno.apellido as apellido_alumno, alumno.correo_electronico, cls.titulo,cls.inicio_normal, inst.nombre as nombre_instructor,
            inst.apellido as apellido_instructor,  alumno.id_usuario as id_alumno, cls.id as id_clase
            FROM usuario_has_clases uhc
            INNER JOIN usuario alumno ON alumno.id_usuario=uhc.usuario_id_usuario
            INNER JOIN clase cls ON cls.id=uhc.clases_id_clases
            INNER JOIN usuario inst ON inst.id_usuario=cls.id_instructor
            LEFT JOIN bitacora bta ON bta.usuario_id_usuario=alumno.id_usuario and bta.clases_id_clases=cls.id
            where cls.id_instructor=" . $idUsuarioSesion . "  and cls.inicio_normal   LIKE '".$fechaFormateada."%' order by  cls.titulo;");
	    $con->cerrarConexion();
	    return $cont;
	}
	
	public static function listarAlumnosPorFecha($fecha) {
	    $con = new Conexion();
	    $cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE nombre = '$fecha'");
	    $con->cerrarConexion();
	    return $cont;
	}
	public static function list_of_class_model() {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM clase");
		$con->cerrarConexion();
		return $cont;
	}
	public function add_bitacora_full($datos){
		$sql=mainModel::connect()->prepare("INSERT INTO bitacora(observacion,usuario_id_usuario,clases_id_clases,fecha,id_profesor) 
		VALUES(:first_name,:last_name,:id_number,:phone,:cellphone)");
		$sql->bindParam(":first_name", $datos['observacion']);
		$sql->bindParam(":last_name", $datos['userid']);
		$sql->bindParam(":id_number", $datos['claseid']);
		$sql->bindParam(":phone", $datos['fecha']);
		$sql->bindParam(":cellphone", $datos['teacherid']);
		$sql->execute();
		return $sql;
	}
}