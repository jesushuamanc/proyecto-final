<?php
      require 'conex/conex.php';
      $id=$_REQUEST['id'];

       $calificacion=$_POST['calificacion'];
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio'];
        $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
      $query="UPDATE menu SET dalificacion='$calificacion' , nombre='$nombre', tipo='$tipo', imagen='$imagen' WHERE id='$id' ";
       
      $resultado= $conn ->query($query);

      if ($resultado) {
        header("Location:menu.php");
        
      }

?>