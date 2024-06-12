<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Exitosa</title>
    <link rel="stylesheet" href="compra_exitosa.css">
</head>
<body>
    <div class="container">
        <h1>¡Compra Exitosa!</h1>
        <p>Gracias por tu compra. Tu pedido ha sido procesado con éxito.</p>
        <h2>Factura de Compra</h2>
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th><img width="150px"  height="150px"  src="img/codigoqr.jpg.jpeg" alt="Codigo QR" ></th>
            </tr>
            <?php
            session_start();
            // Iterar a través de los productos en la compra y mostrarlos en la factura
            foreach ($_SESSION['carrito'] as $producto) {
                echo "<tr>";
                echo "<td>" . $producto['nombre'] . "</td>";
                echo "<td>$" . $producto['precio'] . "</td>";
                echo "</tr>";
            }
            ?>
            <tr>
                <td>Total:</td>
                <td>$<?php if (isset($_GET['total'])) {
                 $total = $_GET['total'];
} else {
    // Manejar el caso en el que 'total' no se proporciona en la URL
    $total = 0;
} ?></td>
            </tr>
        </table>
        <a href="juegos.php">Volver a la tienda</a>
    </div>
</body>
</html>
