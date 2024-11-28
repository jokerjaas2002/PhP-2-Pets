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
<label id="nombre">Name pets: <input id="nombre" name="nombre"
type="text" required /></label>

<label id="tipo">Type of Pets:
    <select id="tipo" name="tipo" required>
        <option value="" disabled selected>Select a type</option>
        <option value="perro">Dog</option>
        <option value="gato">Cat</option>
        <option value="ave">Bird</option>
    </select>
</label>
<label id="raza">Breed: <input type="text" id="raza" name="raza" required placeholder="Enter animal breed here..."></label>
<label id="nombre_cliente">Name Clients: <input id="nombre_cliente" name="nombre_cliente"
type="text" required /></label>
<legend>Sex:</legend>
<input type="radio" name="sexo" id="F" value="F" required>
<label for="F">Femenino</label>
<input type="radio" name="sexo" id="M" value="M">
<label for="M">Masculino</label>
<label for="fecha_nacimiento">Date of Birth: <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required></label>
<input type="submit" value="Register">
<input id="limpiar" name="Limpiar" type="reset" />
</form>
</body>
</html>