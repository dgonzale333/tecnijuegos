<?php
$conexion=mysqli_connect("localhost","root","","tecnijuegos")
or die ("problemas con la conexion");
if ($conexion==true){
    echo"se establecio conexion a la BD";
}

session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM clientes WHERE correo = '$correo' AND contraseña = '$contraseña'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Inicio de sesión exitoso
        $_SESSION['inicio'] = true;
        $_SESSION['correo'] = $correo;
        header('Location: menu.html');
    } else {
        // Error de inicio de sesión
        echo "Correo o contraseña incorrectos. <a href='inicio.html'>Inténtalo de nuevo</a>";
    }
}


session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: menu.html');
    exit;
}

echo "¡Bienvenido, " . $_SESSION['correo'] . "!";

// Aquí puedes mostrar el contenido de la página de bienvenida
?>



