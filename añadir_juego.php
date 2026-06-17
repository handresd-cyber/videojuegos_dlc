<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Nuevo Videojuego</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Añadir un Nuevo Videojuego al Catálogo</h1>
    <a href="index.php"> Volver al catálogo</a>

    <form action="procesar_videojuego.php" method="POST" style="margin-top: 20px; display: flex; flex-direction: column; max-width: 400px; gap: 10px;">
        
        <label>Título:</label>
        <input type="text" name="titulo" required>

        <label>Precio (€):</label>
        <input type="number" step="0.01" name="precio" required>

        <label>Stock (Unidades):</label>
        <input type="number" name="stock" required>

        <label>Plataforma ID (Pon 1 o 2 según tu BD):</label>
        <input type="number" name="plataforma_id" value="1" required>

        <label>Género ID (Pon 1 o 2 según tu BD):</label>
        <input type="number" name="genero_id" value="1" required>

        <label>Desarrolladora:</label>
        <input type="text" name="desarrolladora" required>

        <label>Año de Lanzamiento:</label>
        <input type="number" name="ano_lanzamiento" min="1950" max="2026" required>

        <button type="submit" style="margin-top: 10px; padding: 10px; cursor: pointer;">Guardar Videojuego 💾</button>
    </form>
</body>
</html>