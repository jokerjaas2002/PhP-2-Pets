<?php 
include("./conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (!empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['raza']) && !empty($_POST['sexo']) && !empty($_POST['fecha_nacimiento']) && !empty($_POST['oculto'])) {
        
        
        $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
        $tipo = mysqli_real_escape_string($link, $_POST['tipo']);
        $raza = mysqli_real_escape_string($link, $_POST['raza']);
        $sexo = mysqli_real_escape_string($link, $_POST['sexo']);
        $fecha_nacimiento = mysqli_real_escape_string($link, $_POST['fecha_nacimiento']);
        $id_mascota = mysqli_real_escape_string($link, $_POST['oculto']);

        
        $sql_check = "SELECT * FROM mascota WHERE id_mascota='$id_mascota'";
        $result_check = mysqli_query($link, $sql_check);

        if (mysqli_num_rows($result_check) > 0) {
            
            
            $sql = "UPDATE mascota SET nombre='$nombre', tipo='$tipo', raza='$raza', sexo='$sexo', fecha_nacimiento='$fecha_nacimiento' WHERE id_mascota='$id_mascota'";
            
            if (mysqli_query($link, $sql)) {
                echo "<script>alert('Se modificó correctamente'); window.location.href='modificar.php';</script>";
            } else {
                echo "Error: " . mysqli_error($link);
                echo "<script>alert('Estamos en mantenimiento preventivo'); window.location.href='modificar.php';</script>";
            }
        } else {
            echo "<script>alert('No se encontró ninguna mascota con ID: $id_mascota'); window.location.href='modificar.php';</script>";
        }
    } else {
        echo "<script>alert('Por favor, completa todos los campos.'); window.location.href='modificar.php';</script>";
    }
}
?>