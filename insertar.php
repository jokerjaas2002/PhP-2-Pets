<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Insertar</title>
<link rel="stylesheet" href="./style.css">
</head>

<body>
<?php include './menu.php' ?>
<form method="post" action="./insertar_logica.php">
<label id="id_mascota">id_mascota: <input id="id_mascota" name="id_mascota"
type="text" required /></label>

<label id="nombre">Nombre: <input id="nombre" name="nombre"
type="text" required /></label>

<label id="apellido">Apellido: <input id="apellido"
name="apellido" type="text" required /></label>
<label id="direccion">Direccion: <textarea id="direccion"
name="direccion" required rows="5" cols="40"></textarea></label>
<label id="email">Email: <input id="email" name="email"
type="text" required /></label>
<label id="telefono">Telefono: <input id="telefono"
name="telefono" type="text" required /></label>

<legend>Sexo:</legend>
<input type="radio" name="sexo" id="F" value="F" required>
<label for="F">Femenino</label>
<input type="radio" name="sexo" id="M" value="M">
<label for="M">Masculino</label>

<label id="ciudad">Ciudad: <input id="ciudad" name="ciudad"
type="text" required /></label>
<input id="registrar" name="Registrar" type="submit" />
<input id="limpiar" name="Limpiar" type="reset" />
</form>
</body>
</html>