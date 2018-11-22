<?php
    require_once 'datosconexion.php';

    if(!empty($_POST['modificarusuario'])){
        $id = $_POST['id'];
        $query = "select * from prueba where id = {$id}";
        $existe = mysqli_query($conexion,$query);
        if (mysqli_num_rows($existe) == 0){
            echo "<h3 style='color: red;'>El ID de usuario no existe, prueba con otro</h3>";
        } else {
            if((!empty($_POST['nombre'])) && (!empty($_POST['apellido']))){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $actualiza = "update prueba set nombre=?,apellido1=? where id = {$id}";
                $prepararupdate = mysqli_prepare($conexion,$actualiza);
                $updateOK = mysqli_stmt_bind_param($prepararupdate,'ss',$nombre,$apellido);
                $updateOK = mysqli_stmt_execute($prepararupdate) or die (mysqli_error());
                mysqli_stmt_close($prepararupdate);
                header('Location:clase6b.php');
            } elseif(!empty($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $actualiza = "update prueba set nombre=? where id = {$id}";
                $prepararupdate = mysqli_prepare($conexion,$actualiza);
                $updateOK = mysqli_stmt_bind_param($prepararupdate,'s',$nombre);
                $updateOK = mysqli_stmt_execute($prepararupdate) or die (mysqli_error());
                mysqli_stmt_close($prepararupdate);
                header('Location:clase6b.php');
            } else {
                $apellido = $_POST['apellido'];
                $actualiza = "update prueba set apellido1=? where id = {$id}";
                $prepararupdate = mysqli_prepare($conexion,$actualiza);
                $updateOK = mysqli_stmt_bind_param($prepararupdate,'s',$apellido);
                $updateOK = mysqli_stmt_execute($prepararupdate) or die (mysqli_error());
                mysqli_stmt_close($prepararupdate);
                header('Location:clase6b.php');
            }
        }
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
    <form action="modificar.php" method="post">
        <label for="id">ID del usuario a modificar:</label>
            <input type="text" name="id" size="5" maxlength="2" required/><br/><br/>
        <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" size="20" maxlength="15"/><br/><br/>
        <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" size="20" maxlength="20" /><br/><br/>
        <input type="submit" name="modificarusuario" value="Modificar usuario"/>
    </form>
</body>
</html>