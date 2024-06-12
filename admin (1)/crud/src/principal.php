<?php
session_start();
include_once "includes/header.php";
include "../conexion.php";
$query1 = mysqli_query($conexion, "SELECT COUNT(id) AS total FROM administradores ");
$totalAdministradores = mysqli_fetch_assoc($query1);
$query2 = mysqli_query($conexion, "SELECT COUNT(id_cliente) AS total FROM clientes ");
$totalClientes = mysqli_fetch_assoc($query2);
$query3 = mysqli_query($conexion, "SELECT COUNT(id_producto) AS total FROM productos ");
$totalProductos = mysqli_fetch_assoc($query3);
$query4 = mysqli_query($conexion, "SELECT COUNT(id_categoria) AS total FROM categorias ");
$totalCategorias = mysqli_fetch_assoc($query4);
$query4 = mysqli_query($conexion, "SELECT COUNT(id_comentario) AS total FROM comentarios ");
$totalComentarios = mysqli_fetch_assoc($query4);
?>
<div class="card">
    <div class="card-header text-center">
        Admin
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $totalAdministradores['total']; ?></h3>

                        <p>Administradores</p>
                    </div>
                    <div class="icon">
                    <i class="nav-icon fas fa-user-cog"></i>
                    </div>
                    <a href="administradores.php" class="small-box-footer">Mas info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $totalClientes['total']; ?></h3>

                        <p>Clientes</p>
                    </div>
                    <div class="icon">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    </div>
                    <a href="clientes.php" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $totalProductos['total']; ?></h3>

                        <p>Productos</p>
                    </div>
                    <div class="icon">
                    <i class="nav-icon fas fa-briefcase"></i>
                    </div>
                    <a href="productos.php" class="small-box-footer">Mas info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $totalCategorias['total']; ?></h3>

                        <p>Categorias</p>
                    </div>
                    <div class="icon">
                    <i class="nav-icon fas fa-briefcase"></i>
                    </div>
                    <a href="categorias.php" class="small-box-footer">Mas info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $totalComentarios['total']; ?></h3>

                        <p>Comentario</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="comentarios.php" class="small-box-footer">Mas info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>

<script src="../assets/js/dashboard.js"></script>