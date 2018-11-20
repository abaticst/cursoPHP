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

        var_dump(checkdate(12,31,2000));
        var_dump(checkdate(2,29,2001));

        //date
        echo date_default_timezone_get(),'<br/>';
        echo date_default_timezone_set('Europe/Madrid'),'<br/>';
        echo date_default_timezone_get(),'<br/>';
        echo date("r"),'<br/>';
        echo date("l\,\ d\ F Y H\:i\:s P"),'<br/><br/><br/>';

        ##

        function dimeFecha(){
            $diaSemanaES = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
            $mesYearES = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            $dia = $diaSemanaES[date("w")];
            $mes = $mesYearES[date("m")-1];
            $diames = date("d");
            $devolver = $dia . ", " . $diames . " de " . $mes . " de " . date("Y H\:i\:s P");
            return $devolver;
        }

        echo dimeFecha();

    ?>
</body>
</html>