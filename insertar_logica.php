<?php
include "./conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$tipos_permitidos = ['perro', 'gato', 'ave']; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['raza']) &&
        !empty($_POST['sexo']) && !empty($_POST['nombre_cliente']) && !empty($_POST['fecha_nacimiento'])) {
        
        $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
        $tipo = mysqli_real_escape_string($link, $_POST['tipo']);
        $raza = mysqli_real_escape_string($link, $_POST['raza']);
        $sexo = mysqli_real_escape_string($link, $_POST['sexo']);
        $nombre_cliente = mysqli_real_escape_string($link, $_POST['nombre_cliente']);
        $fecha_nacimiento = mysqli_real_escape_string($link, $_POST['fecha_nacimiento']);

        
        $current_date = date('Y-m-d');
        if ($fecha_nacimiento > $current_date) {
            echo "<script>alert('La fecha de nacimiento no puede ser mayor a la fecha actual.');</script>";
        } else if (!in_array($tipo, $tipos_permitidos)) {
            echo "<script>alert('El tipo debe ser uno de los siguientes: " . implode(", ", $tipos_permitidos) . ".');</script>";
        } else {
            
            $sql = "INSERT INTO mascota (nombre, tipo, raza, sexo, nombre_cliente, fecha_nacimiento) 
                    VALUES ('$nombre', '$tipo', '$raza', '$sexo', '$nombre_cliente', '$fecha_nacimiento')";

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

echo '<meta http-equiv="refresh" content="0;URL=insertar.php">';
?>

