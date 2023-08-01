

<!-- Modal -->
<div class="modal fade" id="nuevomodal" tabindex="-1" aria-labelledby="nuevomodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="nuevomodalLabel">AGREGAR MENU</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="guarda.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="nb-3">
                <label for="nombre" class="from-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" required class="form-control"> 
            </div>
            <div class="nb-3">
                <label for="calificacion" class="from-label">Calificacion</label>
                <input type="text" name="calificacion" id="calificacion" required class="form-control"> 
            </div>
            <div class="nb-3">
                <label for="tipo" class="from-label">tipo</label>
               <select required name="tipo" id="tipo" class="form-select">
                    <option value="">selecionar ...</option>
                    <option value="frios">frios</option>
                    <option value="arroces">arroces</option>
                    <option value="crocantes">crocantes</option>
               </select>
            </div>
            <div class="nb-3">
                <label for="precio" class="from-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>
            <div class="nb-3">
                <label for="imagen" class="from-label">img</label>
                <input class="form-control" type="file" name="imagen" id="imagen"   accept=".jpg, .jpeg, .png">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk" name="guardar"></i>Guardar</button>
            </div>

        </form>
      </div>
     
    </div>
  </div>
</div>