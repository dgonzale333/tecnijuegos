<?php
include "../conexion.php";
$id_cliente = $_POST['id_cliente'];
$eliminar = mysqli_query($conexion, "DELETE FROM clientes WHERE id_cliente = $id_cliente");
header('location: clientes.php');
?>