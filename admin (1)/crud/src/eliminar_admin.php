<?php
include "../conexion.php";
$id = $_POST['id'];
$eliminar = mysqli_query($conexion, "DELETE FROM administradores WHERE id = $id");
header('location: administradores.php');
?>