<?php
require_once __DIR__ . '/../classes/config.php';
require_once __DIR__ . '/../classes/Videojuego.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizar/leer campos
    $titulo = $_POST['titulo'] ?? '';
    $precio = isset($_POST['precio']) ? (float)$_POST['precio'] : 0.0;
    $stock = isset($_POST['stock']) ? (int)$_POST['stock'] : 0;
    $plataforma_id = isset($_POST['plataforma_id']) ? (int)$_POST['plataforma_id'] : null;
    $genero_id = isset($_POST['genero_id']) ? (int)$_POST['genero_id'] : null;
    $desarrolladora = $_POST['desarrolladora'] ?? null;
    $ano_lanzamiento = isset($_POST['ano_lanzamiento']) ? (int)$_POST['ano_lanzamiento'] : null;

    // Guardar usando la clase Videojuego y la conexión $pdo (definida en config.php)
    try {
        $ok = Videojuego::crear($pdo, $titulo, $desarrolladora, $ano_lanzamiento, $genero_id, $plataforma_id, $precio, $stock);
        if ($ok) {
            echo "Videojuego guardado exitosamente.";
        } else {
            echo "Error al guardar el videojuego.";
        }
    } catch (Throwable $e) {
        echo "Excepción al guardar: " . $e->getMessage();
    }
} else {
    echo "Método no permitido.";
}
