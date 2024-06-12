<?php
require_once "../conexion.php";
$id_comentario=$_POST['id_comentario'];
$nombre = $_POST['nombre'];
$comentario = $_POST['texto'];
$correo = $_POST['correo'];
$sql="UPDATE comentarios SET  nombre='$nombre',texto='$comentario', correo='$correo' WHERE id_comentario='$id_comentario'";
$query=mysqli_query($conexion,$sql);
if($query){
    Header("Location: comentarios.php");
}
?>