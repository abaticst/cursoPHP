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
        define('UNO',1);
        function producto($v1=UNO,$v2=2){
            return $v1*$v2;
        }

        echo 'producto( ) = ',producto(),'<br/>';
        echo 'producto(3) = ',producto(4),'<br/>';

        ##################

        function mostrar_numeros($num1, int $num2){
            echo $num1,'<br/>';
            echo $num2,'<br/>';
        }

        mostrar_numeros(5,7);
        mostrar_numeros(5.2,7.6);
        echo '<hr>';

        ###################

        $valor = 20;

        function por_valor($valor){
            echo $valor,'<br/>';
            $valor++;
            echo $valor,'<br/>';
        }

        echo $valor,'<br/>';
        por_valor($valor);
        echo $valor,'<br/>';
        echo '<hr>';

        ###################

        $valor2 = 10;

        function por_valor2(&$valor2){
            echo $valor2,'<br/>';
            $valor2++;
            echo $valor2,'<br/>';
        }

        echo $valor2,'<br/>';
        por_valor2($valor2);
        echo $valor2,'<br/>';
    ?>
</body>
</html>