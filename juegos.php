<?php
session_start();

// Inicializa el carrito si no existe en la sesión
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

 // Función para agregar un producto al carrito
 function agregarAlCarrito($nombre, $precio) {
  $_SESSION['carrito'][] = array('nombre' => $nombre, 'precio' => $precio);
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito($indice) {
    unset($_SESSION['carrito'][$indice]);
}

$indice = null; // Definir $indice inicialmente como nulo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (isset($_POST["agregarAlCarritoRead"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
     agregarAlCarrito($producto, $precio);
    
  } elseif (isset($_POST["agregarAlCarritoFIFA"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
   

  } elseif (isset($_POST["agregarAlCarritoGTA"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
   

  } elseif (isset($_POST["agregarAlCarritoForza"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
    

  } elseif (isset($_POST["agregarAlCarritoHalo"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
   

  } elseif (isset($_POST["agregarAlCarritoVall"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
    

  } elseif (isset($_POST["agregarAlCarritoMortal"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
    

  } elseif (isset($_POST["agregarAlCarritoTri"])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    agregarAlCarrito($producto, $precio);
   

  } elseif (isset($_POST["eliminarDelCarrito"])) {
    $indice = $_POST['indice'];
    eliminarDelCarrito($indice);
  }
}

if ($indice) {
  echo '<script>
    alert("BORRADO EXITOSAMENTE");
    window.location = "juegos.php"
  </script>';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUEGOS</title>
    <link rel="stylesheet" href="juegos.css">
</head>
<body bgcolor="black"  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">>
  <header>
        <nav>
           <a href="menu.html">Inicio</a>
                 <a href="productos.html">Productos</a>
                 <a href="contacto.html">Contacto</a>
                 <a href="conocenos.html">Conocenos</a>
           <button id="carritoModalButton" onclick="abrirCarritoModal()">Ver Carrito</button>
   
         </div>
        </div>
        </nav>
         </header>
       <div class="encabezado-img">
             <h1>JUEGOS</h1>
         </div>
       <br><br>
       
         <div class="box">
             <h1 style="color: white;">JUEGOS PRINCIPALES</h1>
           </div>
           <div class="search1">
         </div>
         
             <br><br>
         </div>
              <br>
             <section class="featured-products"> 
                
                   </div>
                 </div>
  
<div class="product">
 
    
    <a href="read.html">
      <img src="img/read.jpg" alt="Read Dead Redemption 2">
    </a>
    <h3 style="color: white;">Read Dead Redemption 2</h3>
    <p style="color: white;">$100.000 COP</p>
    <form method="post" action="">
    <input type="hidden" name="producto" value="Read Dead Redemption 2">
    <input type="hidden" name="precio" value="100000">
    <input type="hidden" name="imagen_url" value="img/read.jpg">
    <p>kkkk</p><button type="submit" name="agregarAlCarritoRead">Agregar al carrito</button>
    </form>
  
</div>

<div class="product">
  
    <a href="fifa23.html">
      <img src="img/fifa.jpg" alt="FIFA 23">
    </a>
    <h3 style="color: white;">FIFA 23</h3>
    <p style="color: white;">$100.000 COP</p>
    <form method="post" action="">
    <input type="hidden" name="producto" value="FIFA 23">
    <input type="hidden" name="precio" value="100000">
    <input type="hidden" name="imagen_url" value="img/fifa.jpg">
    <p>kkkk</p><button type="submit" name="agregarAlCarritoFIFA">Agregar al carrito</button>
  </form>
</div>

<div class="product">
 
    <a href="gtav.html">
      <img src="img/gta5.jpg" alt="GTA V">
    </a>
    <h3 style="color: white;">GTA V</h3>
    <p style="color: white;">$85.000 COP</p>
    <p>Cantidad: 10</p>
    <form method="post" action="">
    <input type="hidden" name="producto" value="GTA V">
    <input type="hidden" name="precio" value="85000">
    <input type="hidden" name="imagen_url" value="img/fifa.jpg">
    <p>kkkk</p> <button type="submit" name="agregarAlCarritoGTA">Agregar al carrito</button>
    </form>
</div>

<div class="product">
 
    <a href="forza.html">
      <img src="img/forza.jpg" alt="Forza MotorSport">
    </a>
    <h3 style="color: white;">Forza MotorSport</h3>
    <p style="color: white;">$150.000 COP</p>
    <p>Cantidad: 10</p>
    <form method="post" action="">
    <input type="hidden" name="producto" value="Forza MotorSport">
    <input type="hidden" name="precio" value="15000">
    <input type="hidden" name="imagen_url" value="img/forza.jpg">
    <p>kkkk</p><button type="submit" name="agregarAlCarritoForza">Agregar al carrito</button>
  </form>
</div>
</section>
             <br>
             <h1 align="center" style="color: white;">MAS JUEGOS</h1>
             <br>
             <section class="featured-products"> 
               <div class="product">
                <a href="read.html">
                <img  src="img/halo.jpg" alt="Producto 1" >
              </a>
                <h3 style="color: white;">Halo Infinite</h3>
                <p style="color: white;">$200.000 COP</p>
                <p>Cantidad:10
                <form method="post" action="">
    <input type="hidden" name="producto" value="Halo Infinite">
    <input type="hidden" name="precio" value="200000">
    <input type="hidden" name="imagen_url" value="img/forza.jpg">
    <p>kkkk</p><button type="submit" name="agregarAlCarritoHalo">Agregar al carrito</button>
  </form>
                <br>
               
              </div>
              <div class="product">
                <a href="asvalhalla.html">
                <img  src="img/asv.jpg" alt="Producto 2">
              </a>
                <h3 style="color: white;">Asassins Creed Valhala</h3>
                <p style="color: white;">$120.000 COP</p>
                <p>Cantidad:10
                <form method="post" action="">
    <input type="hidden" name="producto" value="Assasins Creed Valhalla">
    <input type="hidden" name="precio" value="120000">
    <input type="hidden" name="imagen_url" value="img/forza.jpg">
    <p>kkkkkkkkkkk</p><button type="submit" name="agregarAlCarritoVall">Agregar al carrito</button>
  </form>
                  <br>
              
              </div>
          
                 <div class="product">
                <img src="img/mk.jpg" alt="Producto 3">
                <h3 style="color: white;">Mortal Kombat 11</h3>
                <p style="color: white;">$90.000 COP</p>
                <p>Cantidad:10
                <form method="post" action="">
    <input type="hidden" name="producto" value="Mortal Kombat 11">
    <input type="hidden" name="precio" value="90000">
    <input type="hidden" name="imagen_url" value="img/forza.jpg">
    <p>kkkk</p><button type="submit" name="agregarAlCarritoMortal">Agregar al carrito</button>
    
  </form>
                  <br>
                
                </div>
                <div class="product">
                  <img src="img/gtat.jpg" alt="Producto 3">
                  <h3 style="color: white;">GTA  The Trilogy</h3>
                  <p style="color: white;">$250.000 COP</p>
                  <p>Cantidad:10
                  <form method="post" action="">
    <input type="hidden" name="producto" value="Gta The Trilogy">
    <input type="hidden" name="precio" value="250000">
    <input type="hidden" name="imagen_url" value="img/forza.jpg">
    <p>kkkk</p><button type="submit" name="agregarAlCarritoTri">Agregar al carrito</button>
  </form>
                    <br>
                    
                </div> 
             </section>

             </div>
            
          <!-- Modal del carrito -->
  <div id="carritoModal" class="modal">
      <div class="modal-content">
          <span class="close" onclick="cerrarCarritoModal()">&times;</span>
          <h2 >Carrito de Compras</h2>
          <ul>
          <?php
$total = 0;
foreach ($_SESSION['carrito'] as $indice => $item) {
  echo '<li>' . $item['nombre'] . ' - $' . $item['precio'] . ' <form method="post" action=""><input type="hidden" name="indice" value="' . $indice . '"><button type="submit" name="eliminarDelCarrito">Eliminar</button></form></li>';
  $total += $item['precio'];
}
?>

          </ul>
          <p>Total: $<?php echo $total; ?></p>
          <form method="post" action="procesar_compra.php">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <button type="submit" name="comprar">Comprar</button>
        </form>
</div>
  </div>
  <script>
  function abrirCarritoModal() {
      var modal = document.getElementById('carritoModal');
      modal.style.display = 'block';
  }

  function cerrarCarritoModal() {
      var modal = document.getElementById('carritoModal');
      modal.style.display = 'none';
  }
  </script> 