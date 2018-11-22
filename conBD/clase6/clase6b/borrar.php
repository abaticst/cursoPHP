<?php
    require_once 'datosconexion.php';

    if(!empty($_POST['borrausuario'])){
        $id = $_POST['id'];
        $query = "select * from prueba where id = {$id}";
        $existe = mysqli_query($conexion,$query);
        if (mysqli_num_rows($existe) == 0){
            echo "<h3 style='color: red;'>El ID de usuario no existe, prueba con otro</h3>";
        } else {
            $borrar = "delete from prueba where id = ?";
            $preparardelete = mysqli_prepare($conexion,$borrar);
            $deleteOK = mysqli_stmt_bind_param($preparardelete,'i',$id);
            $deleteOK = mysqli_stmt_execute($preparardelete) or die (mysqli_error());
            mysqli_stmt_close($preparardelete);
            header('Location:clase6b.php');
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
    <form action="borrar.php" method="post">
        <label for="id">ID del usuario a borrar:</label>
            <input type="text" name="id" size="5" maxlength="2" required/><br/><br/>
        <input type="submit" name="borrausuario" value="Borrar usuario"/>
    </form>
</body>
</html>