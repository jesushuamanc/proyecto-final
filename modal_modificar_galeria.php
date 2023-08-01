<?php
require_once("header.php");
?>
<?php   
            require_once("conex/conex.php");
            $id=$_REQUEST['id'];
            $query="SELECT * FROM galeria WHERE id='$id' ";
            $resultado=$conn ->query($query);
            $row=$resultado->fetch_assoc();
            ?> 
    
    
     
 <form action="editar_galeria.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data" autocomplete="off">
        
            <div class="nb-3">
                <label for="imagen" class="from-label">img</label>
                <input required class="form-control" type="file" name="imagen" id="imagen"   accept=".jpg, .jpeg, .png">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row["img"]); ?>" width = 100 >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">  <a href="galeria.php" > <i class="fa-solid fa-backward"></i></a> </button>
                <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk" name="guardar"></i>Guardar</button>
            </div>

        </form>
      
        </div>
     
     </div>
   </div>
 </div>