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
            switch $opcion {
                case 1 :
                    instrucciones;
                    break;
                case 2 :
                    instrucciones;
                    break;
                default :
                    isntrucciones;
            }
        */

        $opcion = 2;

        switch ($opcion) :
            case 1 : ?>
                <h1>Opcion uno</h1>
                <?php break;
            case 2 : ?>
                <h2>Opcion dos</h2>
                <?php break;
            default : ?>
                <p>Opcion incorrecta</p>
            <?php endswitch;

    ?>
</body>
</html>