<?php
    $conexion = new mysqli("fdb1030.awardspace.net", "4585646_hospital", "}Pu#uZ;k4UD5L)r}", "4585646_hospital");
    /*if($conexion){
        
    }else{
        echo "Falló la conexión";
    }*/
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>