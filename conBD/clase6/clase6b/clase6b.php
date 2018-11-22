<?php
    require_once 'datosconexion.php';
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
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <h1>Operaciones CRUD</h1>
            
            
                <label for="ver"></label>
                    <input type="submit" name="ver" value="Consultar datos"/>
                <label for="anadir"></label>
                    <input type="submit" name="anadir" value="Añadir datos"/>
                <label for="modificar"></label>
                    <input type="submit" name="modificar" value="Modificar datos"/>
                <label for="borrar"></label>
                    <input type="submit" name="borrar" value="Borrar datos"/>
            
            
        </form>
        <?php
            if(!empty($_POST['ver'])){
                require_once 'ver.php';
            } elseif (!empty($_POST['anadir'])) {
                require_once 'anade.php';
            } elseif (!empty($_POST['modificar'])){
                require_once 'modificar.php';
            } elseif (!empty($_POST['borrar'])){
                require_once 'borrar.php';
            }
        ?>
</body>
</html>