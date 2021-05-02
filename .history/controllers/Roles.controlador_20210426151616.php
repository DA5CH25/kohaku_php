<?php
require_once '../modelos/Rol.clase.php';
require_once '../dao/Roles.dao.php';

switch ($_GET['a']) {
	case 'ingr':
		$r = new Rol();
		$r->nombre = $_POST['nombre'];
		$r->apellido = $_POST['apellido'];
		$r->apellido = $_POST['numero_identificacion'];
		$r->apellido = $_POST['telefono_fijo'];
		$r->apellido = $_POST['telefono_movil'];
		$r->apellido = $_POST['apellido'];
		$r->apellido = $_POST['apellido'];
		$r->apellido = $_POST['apellido'];

		</th>
			<th></th>
			<th></th>
			<th></th>
			<th>correo_electronico</th>
			<th>clave</th

		RolesDAO::ingresarDato($r);
		break;
	case 'edit':
		$r = new Rol();
		$r->id_usuario = $_POST['id_usuario'];
		$r->nombre = $_POST['nombre'];

		RolesDAO::editarDato($r);
		break;
	case 'elim':
		RolesDAO::eliminarPorId($_GET['id_usuario']);
		break;
}

header('Location: ../roles/');