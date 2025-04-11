<?php
include 'clase-reserva.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $descripcion = $_POST["descripcion"] ?? '';

    $reserva = new Reserva($nombre, $telefono, $fecha, $hora, $descripcion);
    $reserva->guardar();

    header("Location: ver-reservas.php");
    exit;
}
?>
