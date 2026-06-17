<?php
/**
 * Clase Genero
 * -------------
 * Representa un género de videojuego (Acción, RPG, etc.)
 * No hereda de Producto: es una entidad independiente, de catálogo.
 */
class Genero
{
    private int $id;
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

    // ----------------------------------------------------------------
    // Métodos de acceso a datos (CRUD)
    // ----------------------------------------------------------------

    public static function listarTodos(PDO $pdo): array
    {
        return $pdo->query('SELECT * FROM generos ORDER BY nombre')->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerPorId(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM generos WHERE id = ?');
        $stmt->execute([$id]);
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        return $fila ?: null;
    }

    public static function crear(PDO $pdo, string $nombre): void
    {
        $stmt = $pdo->prepare('INSERT INTO generos (nombre) VALUES (?)');
        $stmt->execute([$nombre]);
    }

    public static function actualizar(PDO $pdo, int $id, string $nombre): void
    {
        $stmt = $pdo->prepare('UPDATE generos SET nombre = ? WHERE id = ?');
        $stmt->execute([$nombre, $id]);
    }

    public static function eliminar(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare('DELETE FROM generos WHERE id = ?');
        $stmt->execute([$id]);
    }
}