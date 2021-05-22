<?php
require_once './models/Conexion.clase.php';
require_once './models/Rol.clase.php'; 

class RolesDAO {
	public static function listarDatos () {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta('SELECT * FROM usuario');
		$con->cerrarConexion();
		return $cont;
	}

	public static function ingresarDato ($rol) {
		$con = new Conexion();
		$con->ejecutarActualizacion("INSERT INTO usuario (nombre, apellido, numero_identificacion, telefono_fijo, telefono_movil, direccion,correo_electronico, clave ) VALUES ('$rol->nombre','$rol->apellido','$rol->numero_identificacion')");
		$con->cerrarConexion();
	}

	public static function buscarPorId ($id) {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE id_usuario = $id_usuario");
		$con->cerrarConexion();
		return $cont[0];
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