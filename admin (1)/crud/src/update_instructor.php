<?php
require_once "../conexion.php";
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];
$sql="UPDATE administradores SET  nombre='$nombre',usuario='$usuario',contrasena='$contrasena',rol='$rol',estado='$estado' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);
if($query){
    Header("Location: instructores.php");
}
?>
