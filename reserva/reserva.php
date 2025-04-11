<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservaciones Guardadas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1 class="mb-4">Reservaciones Realizadas</h1>
    <div class="list-group">
        <?php
        $archivo = "reservaciones.txt";
        if (file_exists($archivo)) {
            $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
            foreach ($lineas as $reserva) {
                echo "<div class='list-group-item'>" . htmlspecialchars($reserva) . "</div>";
            }
        } else {
            echo "<p>No hay reservaciones registradas aún.</p>";
        }
        ?>
    </div>
</body>
</html>
