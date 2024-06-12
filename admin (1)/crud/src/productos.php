<?php
session_start();
    include "../conexion.php";
    //empty = Determina si una variable está vacía
    if (!empty($_POST)) {
        $alert = "";        
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $foto = $_FILES['foto'];
        $fecha = date('YmdHis');
       
       
        
       
        if (empty($nombre) || empty($descripcion) || $precio < 0) {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Todo los campos son obligatorios
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        
        } else {
            $imagen = null;
            if (!empty($foto['name'])) {
                $imagen = $fecha . '.jpg';
            }
            else if (!empty($foto_actual) && empty($foto['name'])) {
                $imagen = $foto_actual;
            }
         
            $query_insert = mysqli_query($conexion, "INSERT INTO productos (nombre,descripcion,precio,foto) VALUES ('$nombre', '$descripcion','$precio','$imagen')");
            if ($query_insert == true) {  
                if (!empty($foto['name'])) {
                    move_uploaded_file($foto['tmp_name'], '../assets/img/upload/'.$imagen);
                }
                
            $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Producto Registrado
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
            Error al registrar el producto
            </div>';
            }
        } 
        
    }

    include_once "includes/header.php";
?>
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" autocomplete="off" id="formulario" enctype="multipart/form-data">
                                <?php echo isset($alert) ? $alert : ''; ?>
                                <h3 align="center">Registrar Producto</h3><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="nombre" class=" text-dark font-weight-bold">Nombre</label>
                                            <input type="text" placeholder="Nombre" class="form-control" name="nombre" id="nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="usuario" class=" text-dark font-weight-bold">Descripcion</label>
                                            <input type="text" placeholder="descripcion" class="form-control" name="descripcion" id="descripcion">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contrasena" class=" text-dark font-weight-bold">Precio</label>
                                            <input type="number" placeholder="precio" class="form-control" name="precio" id="precio">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="rol" class=" text-dark font-weight-bold">Foto</label>
                                            <input type="file" placeholder="foto" class="form-control" name="foto" id="foto">
                                        </div>
                                    </div>
                                   
                                  
                                </div>
                                <div class="row">
                                    
                                
                                    <div class="col-md-6">
                                      
                                            
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        
                                        <input type="submit" value="Registrar" class="btn btn-primary" id="btnAccion">
                                        <!--<input type="button" value="Nuevo" onclick="limpiar()" class="btn btn-success" id="btnNuevo">-->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <br><h3 align="center">Listado de Productos</h3>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tbl">
                                <thead>
                                    <tr>

                                        <th>id_producto</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Foto</th>
                                     
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../conexion.php";
                                    $query_ins = mysqli_query($conexion, "SELECT  * FROM productos");
                                    $result_ins = mysqli_num_rows($query_ins);
                                    if ($result_ins > 0) {
                                        while ($data_ins = mysqli_fetch_assoc($query_ins)) {
                                            $img = ($data_ins['foto'] == null) ? '../assets/img/upload/user.jpg' : '../assets/img/upload/'.$data_ins['foto'];
                                            echo '<tr>
                                                <td>'.$data_ins["id_producto"].'</td>
                                                <td>'.$data_ins["nombre"].'</td>
                                                <td>'.$data_ins["descripcion"].'</td>
                                                <td>'.$data_ins["precio"].'</td>
                                                <td><img class="img-thumbnail" src="'.$img.'" alt="" width="100"></td>
                                                
                                               
                                                <td>
                                                    <form action="eliminar_productos.php" method="POST" class="d-inline">
                                                    <input type="hidden" id="id_producto" name="id_producto" value="'.$data_ins["id_producto"].'">
                                                    
                                                    <input type="submit" class="btn btn-danger" id="eliminar" name="eliminar" value="Eliminar">
                                                    </form>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarInstructor'.$data_ins['id_producto'].'">
                                                        Editar
                                                    </button>
                                                    
                                                </td>
                                            </tr>';
                                            include('modal_editar_producto.php');
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "includes/footer.php";
?>