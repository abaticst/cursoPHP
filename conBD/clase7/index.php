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
<h3>Entrar al sistema</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <label for="correo">Usuario:</label>
                <input type="text" name="correo" value=""/><br/><br/>
            <label for="pass">Password:</label>
                <input type="password" name="pass" value=""/><br/><br/>
            <input type="submit" name="enviar" value="Enviar"/>
        </fieldset>
    </form>
    <?php
        require_once('validaDatos.php');
    ?>
</body>
</html>