<?php
    include("conexion.php");
    $nombre         =$_POST['nombre'];
    $apellido       =$_POST['apellido'];

    $consulta = "INSERT INTO empleados(nombre, apellido) VALUES('$nombre', '$apellido')";

    if($conexion->query($consulta)===TRUE){
        header("Location: agregar.php");
    }else{
        echo "Error: ".$consulta."<br>".$conexion->error;
    }
    $conexion->close();
?>