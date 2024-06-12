<?php
session_start();
    include "../conexion.php";
    //empty = Determina si una variable está vacía
    if (!empty($_POST)) {
        $alert = "";        
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $rol = $_POST['rol'];
        $estado = $_POST['estado'];
       
        
       
        if (empty($nombre) || empty($contrasena) || $usuario < 0) {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Todo los campos son obligatorios
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
         
            $query_insert = mysqli_query($conexion, "INSERT INTO administradores (nombre,usuario,contrasena,rol,estado) VALUES ('$nombre', '$usuario','$contrasena','$rol','$estado')");
            if ($query_insert == true) {  
            $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Administrador registrado
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
            Error al registrar el instructor
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
                                <h3 align="center">Registrar Administrador</h3><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="nombre" class=" text-dark font-weight-bold">Nombre</label>
                                            <input type="text" placeholder="Nombre" class="form-control" name="nombre" id="nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="usuario" class=" text-dark font-weight-bold">Usuario</label>
                                            <input type="text" placeholder="usuario" class="form-control" name="usuario" id="usuario">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contrasena" class=" text-dark font-weight-bold">Contrasena</label>
                                            <input type="text" placeholder="Contrasena" class="form-control" name="contrasena" id="contrasena">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="rol" class=" text-dark font-weight-bold">Rol</label>
                                            <input type="text" placeholder="Rol" class="form-control" name="rol" id="rol">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="estado" class=" text-dark font-weight-bold">Estado</label>
                                            <input type="text" placeholder="Estado" class="form-control" name="estado" id="estado">
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
                <br><h3 align="center">Listado de instructores</h3>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tbl">
                                <thead>
                                    <tr>

                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Contrasena</th>
                                        <th>rol</th>
                                        <th>estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../conexion.php";
                                    $query_ins = mysqli_query($conexion, "SELECT  * FROM administradores");
                                    $result_ins = mysqli_num_rows($query_ins);
                                    if ($result_ins > 0) {
                                        while ($data_ins = mysqli_fetch_assoc($query_ins)) {
                                          
                                            echo '<tr>
                                                <td>'.$data_ins["id"].'</td>
                                                <td>'.$data_ins["nombre"].'</td>
                                                <td>'.$data_ins["usuario"].'</td>
                                                <td>'.$data_ins["contrasena"].'</td>
                                                <td>'.$data_ins["rol"].'</td>
                                                <td>'.$data_ins["estado"].'</td>
                                                <td>
                                                    <form action="eliminar_admin.php" method="POST" class="d-inline">
                                                    <input type="hidden" id="id" name="id" value="'.$data_ins["id"].'">
                                                    <input type="submit" class="btn btn-danger" id="eliminar" name="eliminar" value="Eliminar">
                                                    </form>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarInstructor'.$data_ins['id'].'">
                                                        Editar
                                                    </button>
                                                    
                                                </td>
                                            </tr>';
                                            include('modal_editar.php');
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