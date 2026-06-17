<?php
// Dlc.php
require_once 'Producto.php';

class Dlc extends Producto {
    private $juego_base_id;
    private $descripcion;

    public function __construct($titulo, $precio, $stock, $juego_base_id, $descripcion, $id = null) {
        // Invocamos al constructor de la clase padre (Producto)
        parent::__construct($titulo, $precio, $stock, $id);
        $this->juego_base_id = $juego_base_id;
        $this->descripcion = $descripcion;
    }

    // Getters específicos
    public function getJuegoBaseId() { return $this->juego_base_id; }
    public function getDescripcion() { return $this->descripcion; }
}
?>