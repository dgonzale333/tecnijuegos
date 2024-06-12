<?php
require_once "../conexion.php";
$id_producto=$_POST['id_producto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$sql="UPDATE productos SET  nombre='$nombre',descripcion='$descripcion',precio='$precio' WHERE id_producto='$id_producto'";
$query=mysqli_query($conexion,$sql);
if($query){
    Header("Location: productos.php");
}
?>