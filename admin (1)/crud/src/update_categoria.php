<?php
require_once "../conexion.php";
$id_categoria=$_POST['id_categoria'];
$nombre = $_POST['nombre'];
$sql="UPDATE categorias SET  nombre='$nombre' WHERE id_categoria='$id_categoria'";
$query=mysqli_query($conexion,$sql);
if($query){
    Header("Location: categorias.php");
}
?>