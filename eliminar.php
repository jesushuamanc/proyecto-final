<?php
      require 'conex/conex.php';
      $id=$_REQUEST['id'];

      
      $query="DELETE FROM  menu  WHERE id='$id' ";
      $resultado= $conn ->query($query);

      if ($resultado) {
        header("Location:menu.php");
        
      }

?>