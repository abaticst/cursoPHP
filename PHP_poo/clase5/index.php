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

        $coche = new Coche();

        var_dump($coche);

        $coche->color="MATE";

        var_dump($coche);

        echo '<hr>';

        $coche2 = new Coche();

        //$coche2->marca = "Seat";

        $coche2->setMarca("Seat");

        var_dump($coche2);

        echo '<hr>';

        $coche3 = new Coche();

        var_dump($coche3->getModelo());



    ?>
</body>
</html>