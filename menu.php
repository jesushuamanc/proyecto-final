
<?php
require_once("header.php");
require_once("conex/conex.php");
?>
<div class="container py-5">
        <h2 class="text-center"> Menu</h2>
    <div class="row justify-content-end"> 
        <div class="col-auto">
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevomodal"> <i class="fa-solid fa-utensils"></i>       
        Nuevo Registro </a>
        </div>
    </div>

    <table class="table table-striped table-hover mt-4 ">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>nombre</th>
                <th>calificacion</th>
                <th>tipo</th>
                <th>precio</th>
                <th>img</th>
                <th colspan="2">accion</th>
              
            </tr>
        </thead>
        <tbody>
            <?php
            require_once("conex/conex.php");
            $query="SELECT * FROM menu";
            $resultado=$conn ->query($query);
            while($row=$resultado->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo  $row["id"]; ?></td>
                <td><?php echo  $row["nombre"]; ?></td>
                <td><?php echo  $row["dalificacion"]; ?></td>
                <td><?php echo  $row["tipo"] ;?></td>
                <td><?php echo  $row["precio"]; ?></td>
                <td> <img src="data:image/jpg;base64,<?php echo base64_encode($row["imagen"]); ?>" width = 100 > </td>
                <td><a href="modal_modificar.php?id=<?php echo  $row["id"]; ?>" 
                class="btn btn-warning" ><i class="fa-solid fa-pencil"></i></a>   </td>


                <td> <a href="eliminar.php?id=<?php echo $row['id'];?>" 
                 class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i></a>   </td>
                
            </tr>

            <?php
          }
            ?>

        </tbody>
    </table>

</div>

<?php
require_once("modal_agregar.php");

require_once("footer.php");
?>