<!--ventana para Update--->
<div class="modal fade" id="editarInstructor<?php echo $data_ins['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="post" action="update_instructor.php">
        <input type="hidden" name="id" value="<?php echo $data_ins['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $data_ins['nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Usuario</label>
                  <input type="text" name="usuario" class="form-control" value="<?php echo $data_ins['usuario']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Contraseña</label>
                  <input type="text" name="contrasena" class="form-control" value="<?php echo $data_ins['contrasena']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Rol</label>
                  <input type="number" name="rol" class="form-control" value="<?php echo $data_ins['rol']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Estado</label>
                  <input type="text" name="estado" class="form-control" value="<?php echo $data_ins['estado']; ?>" required="true">
                </div>
           
              
                    
                
          
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
