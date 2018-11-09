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
        //checkdate
        var_dump(checkdate(12,31,2000));//correcto
        var_dump(checkdate(2, 29, 2001));//error

        //date
        echo date("");

        //date_default_timezone_set

        date_default_timezone_set('America/Los_Angeles');
        date_default_timezone_set('Europe/Madrid');

        echo date(DateTime::COOKIE);

        echo date('l\, \d\e S');

        $hoy = getdate();
        //print_r($hoy);
        //var_dump($hoy);
        foreach($hoy as $dato){
            echo $dato,'<br/>';
        }




        /*function dimeF,echa(){
            $diasSemanaEs = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
            //$numdia = date("w");
            $dia = $diasSemanaEs[date("w")];
            return $dia;
        }

        echo dimeFecha();

        echo date("j/l-N|z--W"),'<br/>';

        echo mktime();*/



    ?>
</body>
</html>