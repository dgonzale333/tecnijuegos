<!--ventana para Update--->
<div class="modal fade" id="editarInstructor<?php echo $data_ins['id_comentario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


      <form method="post" action="update_comentario.php">
        <input type="hidden" name="id_comentario" value="<?php echo $data_ins['id_comentario']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $data_ins['nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Comentario</label>
                  <input type="text" name="texto" class="form-control" value="<?php echo $data_ins['texto']; ?>" required="true">
                </div>
              
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Correo</label>
                  <input type="text" name="correo" class="form-control" value="<?php echo $data_ins['correo']; ?>" required="true">
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
