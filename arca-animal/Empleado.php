<?php
class Empleado {
    private $id;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $rol;
    private $telefono;
    private $correo;
    private $cedula;
    private $usuario;
    private $contrasena; // guarda el hash o el texto temporalmente antes de hashear

    public function __construct($nombre, $apellido_paterno, $apellido_materno, $rol, $telefono, $correo, $cedula, $usuario, $contrasena) {
        $this->nombre            = $nombre;
        $this->apellido_paterno  = $apellido_paterno;
        $this->apellido_materno  = $apellido_materno;
        $this->rol               = $rol;
        $this->telefono          = $telefono;
        $this->correo            = $correo;
        $this->cedula            = $cedula;
        $this->usuario           = $usuario;
        $this->contrasena        = $contrasena;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getApellidoPaterno() { return $this->apellido_paterno; }
    public function getApellidoMaterno() { return $this->apellido_materno; }
    public function getRol() { return $this->rol; }
    public function getTelefono() { return $this->telefono; }
    public function getCorreo() { return $this->correo; }
    public function getCedula() { return $this->cedula; }
    public function getUsuario() { return $this->usuario; }
    public function getContrasena() { return $this->contrasena; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setApellidoPaterno($v) { $this->apellido_paterno = $v; }
    public function setApellidoMaterno($v) { $this->apellido_materno = $v; }
    public function setRol($rol) { $this->rol = $rol; }
    public function setTelefono($telefono) { $this->telefono = $telefono; }
    public function setCorreo($correo) { $this->correo = $correo; }
    public function setCedula($cedula) { $this->cedula = $cedula; }
    public function setUsuario($usuario) { $this->usuario = $usuario; }
    public function setContrasena($contrasena) { $this->contrasena = $contrasena; }
}
