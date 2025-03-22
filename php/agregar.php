<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>Agregar</title>
</head>
<body>
    <center>
        <h1>Registro de datos</h1>
        <form action="guardar.php" method="POST">
            <h2>Detalles</h2>
            
            <!-- <label for="nombre">Nombre(s):</label> -->
            <input type="text" name="nombre" placeholder="Nombre(s)..." maxlength="30" required><br><br>

            <!-- <label for="apellido">Apellido(s):</label> -->
            <input type="text" name="apellido" placeholder="Apellido(s)..." maxlength="30" required><br><br>

            <input type="submit" value="Aceptar"><br><br>
        </form>
    <a href="../index.php">Registrar</a>
    </center>
</body>
</html>