php

Verify
Edit
Copy code
<?php 
include "./conexion.php"; // Asegúrate de que este archivo se conecta correctamente a la base de datos

// Verificar si se ha pasado el parámetro 'eli'
if (isset($_GET['eli'])) {
    // Escapar el valor del parámetro para evitar inyecciones SQL
    $id_mascota = mysqli_real_escape_string($link, $_GET['eli']);
    
    // Imprimir el ID para depuración
    echo "ID de mascota a eliminar: " . $id_mascota; // Para depuración

    // Verificar si el registro existe
    $check_sql = "SELECT * FROM mascota WHERE id_mascota='$id_mascota'";
    $check_result = mysqli_query($link, $check_sql);
    
    if (mysqli_num_rows($check_result) == 0) {
        echo "<script>alert('No se encontró el registro para eliminar.');</script>";
    } else {
        // Preparar la consulta SQL para eliminar
        $sql = "DELETE FROM mascota WHERE id_mascota='$id_mascota'";
        
        // Imprimir la consulta para depuración
        echo "Consulta SQL: " . $sql; // Para depuración
        
        // Ejecutar la consulta
        if (mysqli_query($link, $sql)) {
            echo "<script>alert('Se eliminó con éxito');</script>";
        } else {
            echo "<script>alert('Error en la eliminación: " . mysqli_error($link) . "');</script>";
        }
    }
} else {
    echo "<script>alert('No se proporcionó un ID para eliminar.');</script>";
}

// Redirigir después de procesar
echo '<meta http-equiv="refresh" content="0;URL=modificar.php">';
?>