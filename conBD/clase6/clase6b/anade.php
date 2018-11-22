<?php 
    require_once 'datosconexion.php';
        
        if(!empty($_POST['anadeusuario'])) {
            $insertar = "insert into prueba (nombre,apellido1,fecha_insertar,hora_insertar) values(?,?,now(),now())";

            $prepararinsert = mysqli_prepare($conexion,$insertar);
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $insertOK = mysqli_stmt_bind_param($prepararinsert,"ss",$nombre,$apellido);
            $insertOK = mysqli_stmt_execute($prepararinsert) or die (mysqli_error());
            mysqli_stmt_close($prepararinsert);
            header('Location:clase6b.php');
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="anade.php" method="post">
        <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" size="20" maxlength="15" required/><br/><br/>
        <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" size="20" maxlength="20" /><br/><br/>
        <input type="submit" name="anadeusuario" value="Añadir usuario"/>
    </form>

</body>
</html>