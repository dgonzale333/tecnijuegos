<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$clave = "";
$bd = "tecnijuegos";

$conn = new mysqli($host, $user, $clave, $bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los datos del formulario se enviaron correctamente
    if (isset($_POST['nombre'], $_POST['texto'], $_POST['fecha_comentario'])) {
        $nombre = $_POST['nombre'];
        $comentario = $_POST['texto'];
        $fecha_comentario = $_POST['fecha_comentario'];
        $correo = $_POST['correo'];

        // Previene la inyección de SQL
        $nombre = $conn->real_escape_string($nombre);
        $comentario = $conn->real_escape_string($comentario);

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO comentarios (nombre, texto, fecha_comentario, correo) VALUES ('$nombre', '$comentario', '$fecha_comentario','$correo')";

        if ($conn->query($sql) === true) {
            echo "Comentario enviado con éxito.";
            header("Location: contacto.html");
                exit;
        } else {
            echo "Error al enviar el comentario: " . $conn->error;
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>