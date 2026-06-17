<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Videojuegos</title>
    <style>
        /* RESET BÁSICO */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        /* FONDO GENERAL Y TEXTO */
        body {
            /* Imagen de fondo gaming de Unsplash */
            background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #f8fafc;
            min-height: 100vh;
        }

        /* BARRA DE NAVEGACIÓN SUPERIOR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(15, 23, 42, 0.85); /* Azul muy oscuro semitransparente */
            backdrop-filter: blur(10px); /* Efecto cristal */
            padding: 1rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-user {
            font-weight: bold;
            font-size: 1.1rem;
            color: #38bdf8; /* Azul claro / Neón */
        }

        .navbar-buttons {
            display: flex;
            gap: 1rem;
        }

        /* BOTONES */
        .btn {
            background-color: #f8fafc;
            color: #0f172a;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #38bdf8;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(56, 189, 248, 0.4);
        }

        .btn-danger {
            background-color: #ef4444;
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
        }

        /* CONTENEDOR PRINCIPAL */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* TÍTULOS DE SECCIÓN */
        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            margin-top: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            color: #e0f2fe;
        }

        /* CUADRÍCULA DE JUEGOS (GRID) */
        .grid-catalogo {
            display: grid;
            /* Crea columnas de al menos 300px, y si hay más espacio mete más columnas */
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        /* TARJETAS DE LOS JUEGOS */
        .card {
            background: rgba(30, 41, 59, 0.7); /* Azul oscuro translúcido */
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1.5rem;
            transition: transform 0.3s ease, border-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #38bdf8;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
        }

        .card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .card p {
            color: #cbd5e1;
            margin-bottom: 0.3rem;
            font-size: 0.95rem;
        }

        .card .precio {
            margin-top: 1rem;
            font-size: 1.1rem;
            font-weight: bold;
            color: #10b981; /* Verde esmeralda para el precio */
        }
    </style>
</head>
<body>

    <!-- BARRA SUPERIOR -->
    <nav class="navbar">
        <div class="navbar-user">
            Bienvenido, admin (Admin)
        </div>
        <div class="navbar-buttons">
            <a href="añadir_juego.php" class="btn">Añadir Juego</a>
            <a href="añadir_dlc.php" class="btn">Añadir DLC</a>
            <a href="#" class="btn btn-danger">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="container">
        
        <!-- SECCIÓN DE VIDEOJUEGOS -->
        <h2>Catálogo de Videojuegos</h2>
        
        <div class="grid-catalogo">
            <!-- AQUÍ EMPEZARÍA TU BUCLE DE PHP -->
            <!-- <?php foreach($videojuegos as $juego): ?> -->

            <!-- TARJETA DE EJEMPLO 1 -->
            <article class="card">
                <h3>The Last of Us Part II</h3>
                <p>Naughty Dog</p>
                <p>2020</p>
                <p class="precio">Precio: 59.99€</p>
            </article>

            <!-- TARJETA DE EJEMPLO 2 -->
            <article class="card">
                <h3>Elden Ring</h3>
                <p>FromSoftware</p>
                <p>2022</p>
                <p class="precio">Precio: 59.99€</p>
            </article>

         
            <article class="card">
                <h3>Cyberpunk 2077</h3>
                <p>CD Projekt Red</p>
                <p>2020</p>
                <p class="precio">Precio: 29.99€</p>
            </article>
            
          
             <article class="card">
                <h3>Red Dead Redemption 2</h3>
                <p>Rockstar Games</p>
                <p>2018</p>
                <p class="precio">Precio: 59.99€</p>
            </article>

            <!-- <?php endforeach; ?> -->
        </div>

        <!-- SECCIÓN DE DLCs -->
        <h2>Contenido Descargable (DLCs)</h2>
        
        <div class="grid-catalogo">
            
             <article class="card">
                <h3>Shadow of the Erdtree</h3>
                <p>Juego Base: Elden Ring</p>
                <p>2024</p>
                <p class="precio">Precio: 39.99€</p>
            </article>
        </div>

    </main>

</body>
</html>