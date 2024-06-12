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

// Comprobar si se envió el formulario de compra
if (isset($_POST['comprar'])) {
    // Obtener los datos de la compra
    $total = $_POST['total'];
    $productos = $_SESSION['carrito']; // Datos del carrito almacenados en la sesión

    // Insertar los datos en la base de datos (ejemplo con una tabla de compras)
    $sql = "INSERT INTO compras (total) VALUES ('$total')";
    if ($conn->query($sql) === true) {
        $id_compra = $conn->insert_id;

        // Insertar detalles de los productos comprados
        foreach ($productos as $producto) { // Cambia $productos a $producto
            $nombre = $conn->real_escape_string($producto['nombre']);
            $precio = $producto['precio'];
            $sql = "INSERT INTO compras_detalles (id_compra, producto, total) VALUES ('$id_compra', '$nombre', '$precio')"; // Cambia $id_compra_detalle a $id_compra
            
            if ($conn->query($sql) !== true) {
                echo "Error al procesar la compra: " . $conn->error;
            }
        }

        // Limpia el carrito después de la compra
        $_SESSION['carrito'] = array();

        // Redirige o muestra un mensaje de compra exitosa
        header("Location: compra_exitosa.php?total=$total=TOTAL_CALCULADO");
    } else {
        echo "Error al procesar la compra: " . $conn->error;
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>

