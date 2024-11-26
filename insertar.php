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
<label id="id_mascota">Id mascota: <input id="id_mascota" name="id_mascota"
type="text" required /></label>

<label id="name_pets">Name pets: <input id="name_pets" name="name_pets"
type="text" required /></label>

<label id="type_of_pets">Type of Pets: <input id="type_of_pets"
name="type_of_pets" type="text" required /></label>
<label id="race">Race: <input type="text" id="race" name="race" required placeholder="Enter animal breed here..."></label>
<label id="name_client">Name Clients: <input id="name_clients" name="name_clients"
type="text" required /></label>
<label id="telefono">Phone number: <input id="telefono"
name="telefono" type="text" required /></label>

<legend>Sex:</legend>
<input type="radio" name="sexo" id="F" value="F" required>
<label for="F">Femenino</label>
<input type="radio" name="sexo" id="M" value="M">
<label for="M">Masculino</label>
<label for="date-of-birth">Date of Birth: <input type="date" id="date-of-birth" name="date-of-birth" required></label>
<input type="submit" value="Register">
<input id="limpiar" name="Limpiar" type="reset" />
</form>
</body>
</html>