<?php include "./conexion.php"; ?>
<html>
<head>
<meta charset="utf-8">
<title>Modificar Formulario</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
$sql = "SELECT * FROM mascota WHERE id_mascota ='$_GET[mod]'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form id="form1" name="form1" method="post"
action="modificar_logica.php">
<label for="textfield">Name pets: <input type="text" name="nombre"
id="nombre" value="<?php print $row['nombre']; ?>" /></label>
<label for="textfield2">Type of Pets: <input type="text" name="type_of_pets"
id="type_of_pets" value="<?php print $row['tipo']; ?>" /></label>
<label for="textfield3">Race: <input type="text"
name="race" id="race" value="<?php print $row['raza'];
?>" /></label>
<label for="textfield3">Name Clients: <input type="text" name="sex"
id="sex" value="<?php print $row['sexo']; ?>" /></label>

<legend>Sexo:</legend>
<?php if ($row['sexo'] == 'F') { ?>
<input type="radio" name="sexo" value="F" id="F" checked="checked"
/>
<?php } else { ?> <input type="radio" name="sexo" value="F" id="F"
/><?php } ?>
<label for="F">Femenino</label>
<?php if ($row['sexo'] == 'M') { ?>
<input type="radio" name="sexo" value="M" id="M" checked="checked"
/>

<?php } else { ?> <input type="radio" name="sexo" value="M" id="M"
/><?php } ?>
<label for="M">Masculino</label>

<label for="date-of-birth">Date of Birth: <input type="date" id="date-of-birth" name="date-of-birth" value="<?php print $row['fecha_nacimiento']; ?>" /></label>
<input type="hidden" name="oculto" id="oculto" value="<?php print
$row['cedula']; ?>" />
<input type="submit" name="submit" id="submit" value="Enviar">
</form>
</body>
</html>