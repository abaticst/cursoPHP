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
    <?php

        require_once 'coche.php';

        /*$coche = new Coche;*/

        $coche = new Coche("Gris","Chevrolet","Matiz",5,5,0);

        var_dump($coche);

        echo $coche;

    ?>
</body>
</html>