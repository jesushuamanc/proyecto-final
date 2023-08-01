

<!-- Modal -->
<div class="modal fade" id="galeriamodal" tabindex="-1" aria-labelledby="galeriamodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="galeriamodalLabel">AGREGAR IMAGENES</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="guarda_galeria.php" method="post" enctype="multipart/form-data" autocomplete="off">
          
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