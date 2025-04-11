<?php
class Reserva {
    public $nombre;
    public $telefono;
    public $fecha;
    public $hora;
    public $descripcion;

    public function __construct($nombre, $telefono, $fecha, $hora, $descripcion = "") {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->descripcion = $descripcion;
    }

    public function guardarEnArchivo() {
        $reservaTexto = "Nombre: {$this->nombre} | Teléfono: {$this->telefono} | Fecha: {$this->fecha} | Hora: {$this->hora} | Descripción: {$this->descripcion}" . PHP_EOL;
        file_put_contents("reservaciones.txt", $reservaTexto, FILE_APPEND);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
    $fecha = $_POST["fecha"] ?? '';
    $hora = $_POST["hora"] ?? '';
    $descripcion = $_POST["descripcion"] ?? '';

    if ($nombre && $telefono && $fecha && $hora) {
        $reserva = new Reserva($nombre, $telefono, $fecha, $hora, $descripcion);
        $reserva->guardarEnArchivo();
        echo "Reserva guardada correctamente.";
    } else {
        echo "Todos los campos obligatorios deben ser llenados.";
    }
}
?>
