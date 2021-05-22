<?php
class Rol {
	public $id_usuario;
	public $nombre;
    public $apellido;
    public $numero_identificacion;
    public $telefono_fijo;
    public $telefono_movil;
    public $direccion;
    public $correo_electronico;
    public $clave;

	public function __construct () {
		$this->id_usuario = ;
		$this->nombre = '';
        $this->apellido = '';
        $this->numero_identificacion = '';
        $this->telefono_fijo = '';
        $this->telefono_movil = '';
        $this->direccion = '';
        $this->correo_electronico = '';
        $this->clave = '';
	}
}