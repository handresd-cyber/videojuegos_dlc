<?php
$conexion = new mysqli("localhost", "root", "", "catalogo_videojuegos_poo");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conexion->prepare("DELETE FROM videojuegos WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php?mensaje=juego_borrado");
    } else {
        echo "Error al borrar: " . $conexion->error;
    }
    $stmt->close();
}
$conexion->close();
?>