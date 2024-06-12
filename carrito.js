 function eliminarProductoDelCarrito(indice) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Maneja la respuesta si es necesario
                // Por ejemplo, actualiza el contenido del cuadro del carrito
                var carritoModal = document.getElementById('carritoModal');
                carritoModal.innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "tu_archivo_php.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("eliminarDelCarrito=1&indice=" + indice);
    }
