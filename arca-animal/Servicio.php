<?php
class Servicio {
    private $id;
    private $nombre;
    private $tipo;
    private $descripcion;
    private $precio;
    private $duracion_estimada;
    private $disponibilidad;

    public function __construct($nombre, $tipo, $descripcion, $precio, $duracion_estimada, $disponibilidad) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->duracion_estimada = $duracion_estimada;
        $this->disponibilidad = $disponibilidad;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getTipo() { return $this->tipo; }
    public function getDescripcion() { return $this->descripcion; }
    public function getPrecio() { return $this->precio; }
    public function getDuracion() { return $this->duracion_estimada; }
    public function getDisponibilidad() { return $this->disponibilidad; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setTipo($tipo) { $this->tipo = $tipo; }
    public function setDescripcion($descripcion) { $this->descripcion = $descripcion; }
    public function setPrecio($precio) { $this->precio = $precio; }
    public function setDuracion($duracion_estimada) { $this->duracion_estimada = $duracion_estimada; }
    public function setDisponibilidad($disponibilidad) { $this->disponibilidad = $disponibilidad; }
}
?>
