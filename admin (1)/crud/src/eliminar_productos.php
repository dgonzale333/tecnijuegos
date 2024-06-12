<?php
include "../conexion.php";
$id_producto = $_POST['id_producto'];
$eliminar = mysqli_query($conexion, "DELETE FROM productos WHERE id_producto = $id_producto");
header('location: productos.php');
?>