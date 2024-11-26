<?php
include "./conexion.php";
$sql="INSERT INTO pets VALUES 
('$_POST[id_pets]','$_POST[name_pets]','$_POST[type_of_pets]',
'$_POST[race]','$_POST[name_clients]','$_POST[phone_nomber]','$_POST[sex]','$_POST[date_of_birth]')";
$result = mysqli_query($link, $sql); //ejecuto la consulta
if (!mysqli_error($link)) {
?>
<script>
alert("Se ingreso con total normalidad");
</script>
<?php
}else{
?>
<script>
alert ("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">