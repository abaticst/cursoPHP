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
            while (condicion){
                bloque de instrucciones;
            }

            while (condicion) :
                bloque de instrucciones;
            endwhile;
        */ 

        //$contador = 6;
        /*while ($contador < 5){
            echo "Hola en la pasada $contador<br/>";
            $contador++;
        }*/

        /*while ($contador <5) :
            echo "Hola en la pasada $contador<br/>";
            $contador++;
        endwhile;*/

        /*
            do {
                bloque de instrucciones;
            } while ();
        */

        /*do {
            echo "Hola en la pasada $contador de do..while<br/>";
            $contador++;
        } while ($contador < 5);*/

        ##############################################################

        /*
            for ($inicio ; $condicion ; $aumento/decremento){
                bloque de instrucciones;
            }
        */

        /*for($x=1;$x<=5;$x++){
            echo "Pasada numero $x del bucle for<br/>";
        }

        echo '<br/>';

        $ciudades = ['Sevilla','Cadiz','Madrid','Murcia'];
        for ($i=0;$i<4;$i++){
            echo $ciudades[$i],'<br/>';
        }*/

        ##############################################################

        $ciudades = ['Sevilla','Cadiz','Madrid','Murcia'];
        $numeros = [25,17,6,8,25];

        
            foreach($ciudades as $ciudad){
                echo $ciudad,'<br/>';
            }

            echo '<br/>';

            foreach($ciudades as $indice => $ciudad){
                echo "$indice => $ciudad <br/>";
            }
        

    ?>  
</body>
</html>