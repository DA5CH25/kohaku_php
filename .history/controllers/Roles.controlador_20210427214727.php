<?php
require_once '../models/Rol.clase.php';
require_once '../models/Roles.dao.php';

switch ($_GET['a']) {
	case 'ingr':
		$r = new Rol();
		$r->nombre = $_POST['nombre'];
		$r->apellido = $_POST['apellido'];
		$r->numero_identificacion = $_POST['numero_identificacion'];
		$r->telefono_fijo = $_POST['telefono_fijo'];
		$r->telefono_movil = $_POST['telefono_movil'];
		$r->direccion = $_POST['direccion'];
		$r->correo_electronico = $_POST['correo_electronico'];
		$r->clave = $_POST['clave'];
		RolesDAO::ingresarDato($r);
		break;
	case 'edit':
		$r = new Rol();
		$r->id_usuario = $_POST['id_usuario'];
		$r->nombre = $_POST['nombre'];
		$r->apellido = $_POST['apellido'];
		$r->numero_identificacion = $_POST['numero_identificacion'];
		$r->telefono_fijo = $_POST['telefono_fijo'];
		$r->telefono_movil = $_POST['telefono_movil'];
		$r->direccion = $_POST['direccion'];
		$r->correo_electronico = $_POST['correo_electronico'];
		$r->clave = $_POST['clave'];

		RolesDAO::editarDato($r);
		break;
	case 'elim':
		RolesDAO::eliminarPorId($_GET['id_usuario']);
		break;
}

header('Location: ../views/models');