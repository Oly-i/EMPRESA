<?php
    include("conexion.php"); 

    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];  
    $apellido = $_POST['apellido'];  

    
    $consulta = "UPDATE empleados SET nombre='$nombre', apellido='$apellido' WHERE id='$id'";
   
    $resultado = $conexion->query($consulta);

    if ($resultado) {
       
        header("Location: ../index.php");
        exit(); 
    } else {
      
        echo "No se modificó el registro";
    }

   
    $conexion->close();
?>
