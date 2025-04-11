<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurante con los mejores platos y postres.">
    <meta property="og:title" content="Restaurante Sapore d'Italia">
    <meta property="og:description" content="Descubre nuestra exquisita selección de platos y postres.">
    <meta property="og:image" content="imagenes/restaurante.jpg">
    <title>Restaurante Sapore d'Italia - Recetas Saladas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="fondo">
    <header>
        <div class="container">
            <div class="logo-title">
                <span class="title">Sapore d'Italia</span>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="/index.html">Página principal</a></li>
                    <li><a href="/menu/postres.html">Postres</a></li>
                    <li><a href="/menu/platos-fuertes.html">Platos Fuertes</a></li>
                    <li><a href="/personal/personal.html">Personal</a></li>
                    <li><a href="/resenias/resenias.html">Reseñas</a></li>
                    <li><a href="/recetas/recetas-dulces.php">Recetas Dulces</a></li>
                    <li><a href="/recetas/recetas-saladas.php">Recetas Saladas</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        <h1 class="text-center text-success">Recetas Saladas</h1>
        <div class="row">

        <?php
        $archivo = "recetas-saladas.txt";

        if (file_exists($archivo)) {
            $recetas = file($archivo);

            foreach ($recetas as $linea) {
                echo '
                <div class="col-md-6 mb-4">
                    <div class="card shadow rounded p-3">
                        <p>' . nl2br(htmlspecialchars($linea)) . '</p>
                    </div>
                </div>';
            }
        } else {
            echo '<p>No hay recetas disponibles.</p>';
        }
        ?>

        </div>
    </main>

    <footer class="text-center blanco py-3">
        <p>RESTAURANTE SHARON</p>  
    </footer>
</body>
</html>
