<?php
    include("conexion.php");
    $id = $_REQUEST['id'];

    $consulta = "SELECT * FROM empleados WHERE id = '$id'";
    $resultado = $conexion->query($consulta);

    $row = $resultado->fetch_assoc();
    
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Modificar</title>
    </head>
    <body>
        <center>
            <h1>Modificar datos</h1>
            <form action="actualizar.php" method="post">
                <input name="nombre" placeholder="nombre.." value="<?php echo $row['nombre']; ?>" type="text"><br><br>

                <input name="apellido" placeholder="apellido.." value="<?php echo $row['apellido']; ?>" type="text"><br><br>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 

                <input type="submit" value="Actualizar">
            </form>
        </center>
    </body>
</html>
