<?php
include "./conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Definir los valores permitidos para el tipo
$tipos_permitidos = ['perro', 'gato', 'pájaro']; // Ajusta esto según tus valores ENUM

// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar que todos los campos requeridos estén presentes y no estén vacíos
    if (!empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['raza']) &&
        !empty($_POST['sexo']) && !empty($_POST['nombre_cliente']) && !empty($_POST['fecha_nacimiento'])) {
        
        // Escapar los datos para evitar inyecciones SQL
        $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
        $tipo = mysqli_real_escape_string($link, $_POST['tipo']);
        $raza = mysqli_real_escape_string($link, $_POST['raza']);
        $sexo = mysqli_real_escape_string($link, $_POST['sexo']);
        $nombre_cliente = mysqli_real_escape_string($link, $_POST['nombre_cliente']);
        $fecha_nacimiento = mysqli_real_escape_string($link, $_POST['fecha_nacimiento']);

        // Validar que el tipo esté en los valores permitidos
        if (!in_array($tipo, $tipos_permitidos)) {
            echo "<script>alert('El tipo debe ser uno de los siguientes: " . implode(", ", $tipos_permitidos) . ".');</script>";
        } else {
            // Preparar la consulta SQL
            $sql = "INSERT INTO mascota (nombre, tipo, raza, sexo, nombre_cliente, fecha_nacimiento) 
                    VALUES ('$nombre', '$tipo', '$raza', '$sexo', '$nombre_cliente', '$fecha_nacimiento')";

            // Ejecutar la consulta
            if (mysqli_query($link, $sql)) {
                echo "<script>alert('Se ingresó con total normalidad');</script>";
            } else {
                echo "<script>alert('Error en la inserción: " . mysqli_error($link) . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Por favor, completa todos los campos.');</script>";
    }
} else {
    echo "<script>alert('El formulario no se ha enviado.');</script>";
}

// Redirigir después de procesar
echo '<meta http-equiv="refresh" content="0;URL=insertar.php">';
?>

