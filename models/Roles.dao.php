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
		/*$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE id_usuario = $id");
		$con->cerrarConexion();
		return $cont->fetch();*/
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
}