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
        //define("NOMBRE","Pablo");
        $ok = defined('NOMBRE');
        if ($ok) {
            echo "La constante está definida<br/>";
        } else {
            echo "No lo esta<br/>";
        }

        #############################

        $una;
        $dos = false;
        $tres = "";
        $cuatro = 17;
        $cinco = null;
        $paraborrar = "Hola";
        $paraprobar = "Hola";
        $paraprobar2 = 17;
        $paraprobar3 = array(1,2,array("a","b","c"),array("Pablo","Emilio",17));

        #############################

        //empty --> una variable está vacia o no (bool)

        if (empty($tres)) {
            echo "Llena<br/>";
        } else {
            echo "Vacia<br/>";
        }

        echo '<hr>';

        //isset

        if (isset($dos)){
            echo "Definida<br/>";
        } else {
            echo "No definida<br/>";
        }

        if (isset($una,$dos,$tres,$cuatro,$cinco)){
            echo "Definidas<br/>";
        } else {
            echo "No definidas";
        }
        echo '<hr>';

        //unset

        if (isset($paraborrar)){
            echo "La variable existe y su contenido es > $paraborrar<br/>";
            unset($paraborrar);
            if (!isset($paraborrar)){
                echo "Ya la he borrado";
            } else {
                echo "No he podido borrarla, algo ha salido mal";
            }
        } else {
            echo "La variable no existe";
        }
        echo '<hr>';

        //var_dump

        if (isset ($paraprobar)){
            var_dump($paraprobar);
        }
        if (isset ($paraprobar2)){
            var_dump($paraprobar2);
        }
        if (isset ($paraprobar3)){
            var_dump($paraprobar3);
        }



    ?>
</body>
</html>