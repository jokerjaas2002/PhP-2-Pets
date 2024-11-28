<?php include './conexion.php' ?>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<?php include './menu.php' ?>
<table>

<tr>
<th>ID PETS</th>
<th>NAME PETS</th>
<th>TYPE OF PETS</th>
<th>RACE</th>
<th>SEX</th>
<th>NAME CLIENTS</th>
<th>DATE OF BIRTH</th>
</tr>
<?php
$sql = "SELECT * FROM mascota";
$result = mysqli_query($link, $sql); 
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
<td><a href="modificar_formulario.php?mod=<?php print
$row['id_pets']; ?> ">Modify</a></td>
<td><a href="eliminar.php?eli=<?php print $row['id_pets']; ?>
">Eliminate</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>