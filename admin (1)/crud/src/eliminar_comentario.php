<?php
include "../conexion.php";
$id_comentario = $_POST['id_comentario'];
$eliminar = mysqli_query($conexion, "DELETE FROM comentarios WHERE id_comentario = $id_comentario");
header('location: comentarios.php');
?>