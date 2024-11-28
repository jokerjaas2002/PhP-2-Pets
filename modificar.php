<?php include './conexion.php'; ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php include './menu.php'; ?>
<table>
    <tr>
        <th>ID PETS</th>
        <th>NAME PETS</th>
        <th>TYPE OF PETS</th>
        <th>RACE</th>
        <th>SEX</th>
        <th>NAME CLIENTS</th>
        <th>DATE OF BIRTH</th>
        <th>ACTIONS</th>
    </tr>
    <?php
    
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM mascota";
    $result = mysqli_query($link, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($link));
    }

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?= $row['id_mascota']; ?></td>
        <td><?= $row['nombre']; ?></td>
        <td><?= $row['tipo']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nombre_cliente']; ?></td>
        <td><?= $row['fecha_nacimiento']; ?></td>
        <td>
            <a href="modificar_formulario.php?mod=<?= $row['id_mascota']; ?>">Modify</a>
            <a href="eliminar.php?eli=<?= $row['id_mascota']; ?>">Eliminate</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>