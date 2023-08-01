<?php
require_once("header.php");
?>
<?php   
            require_once("conex/conex.php");
            $id=$_REQUEST['id'];
            $query="SELECT * FROM menu WHERE id='$id' ";
            $resultado=$conn ->query($query);
            $row=$resultado->fetch_assoc();
            ?> 
    
    
     
 <form action="editar.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="nb-3">
                <label for="nombre" class="from-label">Nombre</label>
                <input value="<?php echo $row['nombre']; ?>" type="text" name="nombre" id="nombre" required class="form-control"> 
            </div>
            <div class="nb-3">
                <label for="calificacion" class="from-label">Calificacion</label>
                <input value="<?php echo $row['dalificacion']; ?>" type="text" name="calificacion" id="calificacion" required class="form-control"> 
            </div>
            <div class="nb-3">
                <label for="tipo" class="from-label">tipo</label>
               <select  required name="tipo" id="tipo" class="form-select">
                    <option  >selecionar ...</option>
                    <option value="frios">frios</option>
                    <option value="arroces">arroces</option>
                    <option value="crocantes">crocantes</option>
               </select>
            </div>
            <div class="nb-3">
                <label for="precio" class="from-label">Precio</label>

                <input value="<?php echo $row['precio'];?>" type="text" name="precio" id="precio" class="form-control">
                    
            </div>
            <div class="nb-3">
                <label for="imagen" class="from-label">img</label>
                <input class="form-control" type="file" name="imagen" id="imagen"   accept=".jpg, .jpeg, .png">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" width = 100 >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">  <a href="menu.php" > <i class="fa-solid fa-backward"></i></a> </button>
                <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk" name="guardar"></i>Guardar</button>
            </div>

        </form>
      
        </div>
     
     </div>
   </div>
 </div>