<?php
class Rol {
	public $id_usuario;
	public $nombre;
    public $apellido;
    public $numero_identificacion;

	public function __construct () {
		$this->id_usuario = 0;
		$this->nombre = '';
        $this->apellido = '';
        $this->numero_identificacion = '';
	}
}