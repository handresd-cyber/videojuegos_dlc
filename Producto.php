<?php
/**
 * Clase Producto
 * ---------------
 * Superclase de la jerarquía. Videojuego y Dlc heredan de esta clase
 * y comparten estos cuatro datos básicos.
 */
class Producto
{
    protected ?int $id;
    protected string $titulo;
    protected float $precio;
    protected int $stock;

    public function __construct(?int $id, string $titulo, float $precio, int $stock)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * Texto descriptivo del producto. Videojuego y Dlc sobrescriben
     * este método para añadir su propia información (polimorfismo).
     */
    public function getDescripcionCompleta(): string
    {
        return $this->titulo . ' — ' . number_format($this->precio, 2) . ' € (Stock: ' . $this->stock . ')';
    }
}