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
        $cadena1 = "Hola mi nombre es Pablo";
        $cadena2 = "Verde,Rojo,Amarillo,Azul";
        $cadena3 = "ESTA ES MI FRASE EN MAYUSCULAS";
        $cadena4 = "esta es mi frase en minusculas";
        $cadena5 = ".=.";
        $cadena6 = "Pablo@Abatic.es";
        $cvacia = "";
        $cvacia2 = "";
        
        //explode

        $cvacia = explode(" ",$cadena1);
        foreach($cvacia as $elemento){
            echo $elemento,'<br/>';
        }
        echo '<br/>';

        $cvacia2 = explode(",",$cadena2);
        foreach($cvacia2 as $elemento2){
            echo $elemento2,'<br/>';
        }

        echo '<hr>';

        //implode

        $cvacia2 = implode(", ",$cvacia);
        echo $cvacia2;

        echo '<hr>';

        //str_split

        $cvacia = str_split($cadena1,3);
        foreach($cvacia as $elemento){
            echo $elemento,'<br/>';
        }

        echo '<hr>';

        //strlen

        echo strlen($cadena1);

        echo '<hr>';

        //strtolower,strtoupper,ucfirst,lcfirst,ucwords

        echo strtolower($cadena3),'<br/>';
        echo strtoupper($cadena4),'<br/>';
        echo ucfirst($cadena4),'<br/>';
        echo lcfirst($cadena3),'<br/>';
        echo ucwords($cadena4),'<br/>';

        echo '<hr>';

        //substr

        echo substr($cadena1,2),'<br/>';
        echo substr($cadena1,-3),'<br/>';
        echo substr($cadena1,2,5),'<br/>';
        echo substr($cadena1,-3,2),'<br/>';

        echo '<hr>';

        //str_repeat

        echo str_repeat($cadena5,10);

        echo '<hr>';

        //strstr

        echo stristr($cadena6,'a'),'<br/>';
        echo stristr($cadena6,'@',true),'<br/>';
        
    ?>
</body>
</html>