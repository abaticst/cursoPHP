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
        ##Variables

        $numero = 17;
        $dia = 9;
        $mes = "Noviembre";

        ##Constantes

        define('NOMBRE','Pablo');
        define('YEAR',2018);

        echo "Hola, mi nombre es ", NOMBRE, ". Y mi numero favorito es el $numero<br/>";
        echo 'Hoy es ' . $dia . " de $mes del año ", YEAR, "<br/>";

        $numeros = [2,8,17,50,147];

        print_r ($numeros);

        $nombres = array("Pablo","Jose","Sandra","Javi","Emilio","Jorge");

        echo '<br/>',$nombres[4];

        $suma = 64 + 128;
        echo '<br/>',$suma;

        $division = $numero/$dia;
        echo '<br/>',$division;

        $resto = $numero%$dia;
        echo '<br/>',$resto;

        $potencia = $numero**$dia;
        echo '<br/>',$potencia;

        $verdad = true;
        echo '<br/>',$verdad;

        $mentira = false;
        echo '<br/>',$mentira;

    ?>
</body>
</html>