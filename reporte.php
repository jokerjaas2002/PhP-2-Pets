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
<th>NOMBRE PETS</th>
<th>TYPE OF PETS</th>
<th>RACE</th>
<th>NAME CLIENTS</th>
<th>PHONE NUMBER</th>
<th>SEX</th>
<th>DATE OF BIRTH</th>
</tr>
<?php
$sql = "SELECT * FROM pets";

$result = mysqli_query($link, $sql); //ejecuto la consulta
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row['id_pets']; ?></td>
<td><?= $row['name_pets']; ?></td>
<td><?= $row['type_of_pets']; ?></td>
<td><?= $row['race']; ?></td>
<td><?= $row['name_clients']; ?></td>
<td><?= $row['phone_number']; ?></td>
<td><?= $row['sex']; ?></td>
<td><?= $row['date_of_birth']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>