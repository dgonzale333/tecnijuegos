<?php
include "../conexion.php";
$id_categoria = $_POST['id_categoria'];
$eliminar = mysqli_query($conexion, "DELETE FROM categorias WHERE id_categoria = $id_categoria");
header('location: categorias.php');
?>