<?php
$link = mysqli_connect("localhost", "root", "", "php2_jokerjaas2002_pets");
if (!$link) {
die('Error de Conexión (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());
}
?>
