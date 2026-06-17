<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    
    <script src="script.js"></script>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    
    <form action="procesar_login.php" method="POST" onsubmit="return confirmarGuardado()" style="display: flex; flex-direction: column; max-width: 300px; gap: 10px;">
        
        <label>Usuario:</label>
        <input type="text" name="usuario" placeholder="Ej: admin" required>

        <label>Contraseña:</label>
        <input type="password" name="password" placeholder="Tu contraseña" required>

        <button type="submit" style="margin-top: 10px; padding: 10px; cursor: pointer;">Entrar</button>
    </form>
</body>
</html>