<?php
/**
 * Clase Plataforma
 * -----------------
 * Representa una plataforma de videojuegos (PC, PS5, etc.)
 * No hereda de Producto: es una entidad independiente, de catálogo.
 */
class Plataforma
{
    private ?int $id;
    private string $nombre;

    public function __construct(?int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }



    public static function listarTodas(PDO $pdo): array
    {
        return $pdo->query('SELECT * FROM plataformas ORDER BY nombre')->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerPorId(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM plataformas WHERE id = ?');
        $stmt->execute([$id]);
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        return $fila ?: null;
    }

    public static function crear(PDO $pdo, string $nombre): void
    {
        $stmt = $pdo->prepare('INSERT INTO plataformas (nombre) VALUES (?)');
        $stmt->execute([$nombre]);
    }

    public static function actualizar(PDO $pdo, int $id, string $nombre): void
    {
        $stmt = $pdo->prepare('UPDATE plataformas SET nombre = ? WHERE id = ?');
        $stmt->execute([$nombre, $id]);
    }

    public static function eliminar(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare('DELETE FROM plataformas WHERE id = ?');
        $stmt->execute([$id]);
    }
}