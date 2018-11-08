<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Operadores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $edad = 29;
        $nombre = "Pablo     ";

        $apellido = $nombre;
        echo $nombre;
        echo $apellido;

        $nombre = "Juan     ";

        echo $nombre;
        echo $apellido;


        #######

        $apellido = &$nombre;

        echo $nombre;
        echo $apellido;

        $nombre = "Maria   ";
        echo $nombre;
        echo $apellido;

        echo '<hr>';
        $num1 = 10;
        $num2 = 5;

        /*echo $num1 + $num2;
        echo '<hr>';
        echo $num1 - $num2;
        echo '<hr>';
        echo $num1 * $num2;
        echo '<hr>';
        echo $num1 / $num2;
        echo '<hr>';
        echo $num1 % $num2;
        echo '<hr>';
        echo $num1 ** $num2;
        echo '<hr>';
        echo -$num1;
        echo '<hr>';
        echo $num1;
        echo '<hr>';
        echo $num1--;
        echo '<hr>';
        echo $num1;*/
        echo '<hr>';
        $nom = "Pablo";
        $ape = "Delgado";

        echo $ape.', '.$nom;
        echo '<hr>';

        /*$num1 = $num1 + 2;
        echo $num1;*/

        $num1 *= 2;
        echo $num1;


        
    ?>
</body>
</html>