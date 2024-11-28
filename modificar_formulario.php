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
<label id="tipo">Type of Pets:
    <select id="tipo" name="tipo" required>
        <option value="" disabled <?php if ($row['tipo'] == '') echo 'selected'; ?>>Select a type</option>
        <option value="perro" <?php if ($row['tipo'] == 'perro') echo 'selected'; ?>>Dog</option>
        <option value="gato" <?php if ($row['tipo'] == 'gato') echo 'selected'; ?>>Cat</option>
        <option value="ave" <?php if ($row['tipo'] == 'ave') echo 'selected'; ?>>Bird</option>
    </select>
</label>
<label for="textfield3">Race: <input type="text"
name="raza" id="raza" value="<?php print $row['raza'];
?>" /></label>
<label for="textfield3">Name Clients: <input type="text" name="sexo"
id="sexo" value="<?php print $row['sexo']; ?>" /></label>

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

<label for="fecha_nacimiento">Date of Birth: <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php print $row['fecha_nacimiento']; ?>" /></label>
<input type="hidden" name="oculto" id="oculto" value="<?php print
$row['id_mascota']; ?>" />
<input type="submit" name="submit" id="submit" value="Enviar">
</form>
</body>
</html>