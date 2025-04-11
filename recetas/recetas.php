<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Recetas Saladas</h2>
        <ul class="list-group">
            <?php
            $recetasSaladas = file('recetas/recetas-saladas.txt', FILE_IGNORE_NEW_LINES);
            foreach ($recetasSaladas as $receta) {
                echo "<li class='list-group-item'>$receta</li>";
            }
            ?>
        </ul>

        <h2 class="mt-5">Recetas Dulces</h2>
        <ul class="list-group">
            <?php
            $recetasDulces = file('recetas/recetas-dulces.txt', FILE_IGNORE_NEW_LINES);
            foreach ($recetasDulces as $receta) {
                echo "<li class='list-group-item'>$receta</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>