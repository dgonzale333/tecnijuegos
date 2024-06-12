<?php
require_once "../conexion.php";
$id_cliente=$_POST['id_cliente'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$sql="UPDATE clientes SET  nombre='$nombre',correo='$correo',contraseña='$contraseña' WHERE id_cliente='$id_cliente'";
$query=mysqli_query($conexion,$sql);
if($query){
    Header("Location: clientes.php");
}
?>