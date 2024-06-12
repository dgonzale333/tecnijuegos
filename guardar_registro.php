<?php
$conexion=mysqli_connect("localhost","root","","tecnijuegos")
or die ("problemas con la conexion");
if ($conexion==true){
    echo"se establecio conexion a la BD";
}
$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$insertar=mysqli_query($conexion,"insert into clientes(nombre,correo,contraseña)
values('$nombre','$correo','$contraseña')")
or die("Problemas con el insert".mysqli_error($conexion));

if ($insertar==true){
    Header("location: menu.html");
}
else{
    echo $insertar;
}