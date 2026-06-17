<?php
require_once __DIR__ . '/Producto.php';

/**
 * Clase Dlc
 * ----------
 * Hereda de Producto y añade los datos propios de un contenido
 * descargable: a qué videojuego pertenece y su descripción.
 */
class Dlc extends Producto
{
    private ?int $juegoBaseId;
    private string $descripcion;

    public function __construct(
        int $id,
        string $titulo,
        float $precio,
        int $stock,
        int $juegoBaseId,
        string $descripcion
    ) {
        parent::__construct($id, $titulo, $precio, $stock);
        $this->juegoBaseId = $juegoBaseId;
        $this->descripcion = $descripcion;
    }

    public function getJuegoBaseId(): ?int
    {
        return $this->juegoBaseId;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    // Sobrescribimos el método del padre para añadir la descripción.
    public function getDescripcionCompleta(): string
    {
        return parent::getDescripcionCompleta() . ' | ' . $this->descripcion;
    }

    // ----------------------------------------------------------------
    // Métodos de acceso a datos (CRUD)
    // ----------------------------------------------------------------

    public static function listarTodos(PDO $pdo): array
    {
        $sql = 'SELECT d.*, v.titulo AS videojuego_titulo
                FROM dlcs d
                LEFT JOIN videojuegos v ON d.juego_base_id = v.id
                ORDER BY d.titulo';

        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerPorId(PDO $pdo, int $id): ?array
    {
        $stmt = $pdo->prepare('SELECT * FROM dlcs WHERE id = ?');
        $stmt->execute([$id]);
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        return $fila ?: null;
    }

    public static function crear(PDO $pdo, string $titulo, ?int $juegoBaseId, string $descripcion, float $precio, int $stock): void
    {
        $sql = 'INSERT INTO dlcs (titulo, juego_base_id, descripcion, precio, stock) VALUES (?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$titulo, $juegoBaseId, $descripcion, $precio, $stock]);
    }

    public static function actualizar(PDO $pdo, int $id, string $titulo, ?int $juegoBaseId, string $descripcion, float $precio, int $stock): void
    {
        $sql = 'UPDATE dlcs SET titulo = ?, juego_base_id = ?, descripcion = ?, precio = ?, stock = ? WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$titulo, $juegoBaseId, $descripcion, $precio, $stock, $id]);
    }

    public static function eliminar(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare('DELETE FROM dlcs WHERE id = ?');
        $stmt->execute([$id]);
    }
}