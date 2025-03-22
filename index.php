<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Index</title>
    </head>
    <body>
        <center>
            <h1>Registros</h1>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
                        include("php/conexion.php");
                        $consulta = "SELECT * FROM empleados";
                        $resultado = $conexion->query($consulta);
                        while($row=$resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['apellido'];?></td>
                        
                        <td><a href="php/modificar.php?id=<?php echo$row['id'];?>"><img src="img/cam.png" height="35px"></a></td>

                        <td><a href="php/eliminar.php?id=<?php echo$row['id'];?>"><img src="img/borr.png" height="35px"></a></td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table><br>
            <a href="php/agregar.php">Agregar registro</a>
            <footer>
                <p>Desarroladores web / Contacto: desarrolla@gmail.com</p>
                <p>Cd. Juárez, Chih. Marzo 2025</p>
            </footer>
        </center>
    </body>
</html>