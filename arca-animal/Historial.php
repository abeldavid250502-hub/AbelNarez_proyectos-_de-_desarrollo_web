<?php
class Historial {
    private $id;
    private $id_mascota;
    private $fecha;
    private $motivo;
    private $diagnostico;
    private $tratamiento;
    private $responsable;
    private $observaciones;

    public function __construct($id_mascota, $fecha, $motivo, $diagnostico, $tratamiento, $responsable, $observaciones) {
        $this->id_mascota   = $id_mascota;
        $this->fecha        = $fecha;
        $this->motivo       = $motivo;
        $this->diagnostico  = $diagnostico;
        $this->tratamiento  = $tratamiento;
        $this->responsable  = $responsable;
        $this->observaciones = $observaciones;
    }

    // ===== Getters =====
    public function getId() { return $this->id; }
    public function getIdMascota() { return $this->id_mascota; }
    public function getFecha() { return $this->fecha; }
    public function getMotivo() { return $this->motivo; }
    public function getDiagnostico() { return $this->diagnostico; }
    public function getTratamiento() { return $this->tratamiento; }
    public function getResponsable() { return $this->responsable; }
    public function getObservaciones() { return $this->observaciones; }

    // ===== Setters =====
    public function setId($id) { $this->id = $id; }
    public function setIdMascota($id_mascota) { $this->id_mascota = $id_mascota; }
    public function setFecha($fecha) { $this->fecha = $fecha; }
    public function setMotivo($motivo) { $this->motivo = $motivo; }
    public function setDiagnostico($diagnostico) { $this->diagnostico = $diagnostico; }
    public function setTratamiento($tratamiento) { $this->tratamiento = $tratamiento; }
    public function setResponsable($responsable) { $this->responsable = $responsable; }
    public function setObservaciones($observaciones) { $this->observaciones = $observaciones; }
}
?>
