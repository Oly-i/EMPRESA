<?php
    include("conexion.php");
    $id =$_REQUEST['id'];
    //echo $id;
    $consulta ="DELETE FROM empleados WHERE id='$id' ";
    //echo $consulta;
    $resultado = $conexion->query($consulta);

    // if($conexion->query($consulta)=== TRUE){
    if($resultado){
        header("Location: ../index.php");
    }else{
        echo "Error: " .$consulta. "<br>" .$conexion->error; 
    }
?>