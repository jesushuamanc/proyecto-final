<?php
      require 'conex/conex.php';

       $calificacion=$_POST['calificacion'];
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio'];
        $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

      $query="INSERT INTO menu VALUES ('','$calificacion','$nombre','$tipo','$precio','$imagen')";
        
      $resultado= $conn ->query($query);

      if ($resultado) {
        header("Location:menu.php");
        
      }

?>