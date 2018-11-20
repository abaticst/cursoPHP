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
        
        /*
            switch ($varaible) {
                case valor1 :
                    bloque de instrucciones;
                    break;
                case valor2 :
                    bloque de instrucciones;
                    break;
                default :
                    bloque de instrucciones;
            }
        */

        $opcion = 2;

        /*switch ($opcion) {
            case 1 :
                echo "Vale uno";
                break;
            case 2 :
                echo "Vale dos";
                break;
            default :
                echo "Opcion incorrecta";
        }*/

        switch ($opcion) :
            case 1 : ?>
                <h1>Vale uno</h1>
                <?php break;
            case 2 : ?>
                <h2>Vale dos</h2>
                <?php break;
            default : ?>
                <p>Opcion incorrecta</p>
        <?php endswitch;
    ?>
    
</body>
</html>