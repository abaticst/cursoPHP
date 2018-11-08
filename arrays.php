<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arrays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $numeros[0] = 1;
        $numeros[1] = "dos";
        $numeros[] = 3;

        $ciudades = array('Sevilla','Cadiz','Madrid');

        $ciudades2 = ['Sevilla','Cadiz','Madrid'];

        const CAPITALES = [['España','Madrid'],['Italia','Roma']];

        echo('<pre>');
        print_r ($ciudades);
        echo('</pre>');
    ?>
</body>
</html>