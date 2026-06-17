<?php
require_once 'Plataforma.php';
require_once 'config.php';
require_once 'Videojuego.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $plataforma_id = $_POST['plataforma_id'];
    $desarrolladora = $_POST['desarrolladora'];
    $ano_lanzamiento = $_POST['ano_lanzamiento'];

    // Crear un objeto Videojuego
    $videojuego = new Videojuego(null, $titulo, 'Videojuego', $precio, $stock, $plataforma_id, null, $desarrolladora, $ano_lanzamiento);

    // Guardar el videojuego en la base de datos
    $repositorio = new Repositorio($conexion);
    if ($repositorio->GuardarVideojuego($videojuego)) {
        echo "Videojuego guardado exitosamente.";
    } else {
        echo "Error al guardar el videojuego.";
    }
} else {
    echo "Método no permitido.";
}