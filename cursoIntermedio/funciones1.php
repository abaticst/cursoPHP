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

        require('./archivos/func.inc');
        /*
        function nombre(){
            instrucciones;
        }*/

        function diHola() {
            echo "Hola, programador<br/>";
        }

        diHola();

        $num1 = 4;
        $num2 = 6;

        function suma($n1,$n2){
            $resultado = $n1 + $n2;
            return $resultado;
        }

        echo suma($num1,$num2);

        if (suma(10,11)<20){
            echo "<br/>Estoy dentro del if y la suma es inferior a 20";
        } else {
            echo "<br/>La suma es más de 20<br/>";
        }

        function sumaarray($num1,$num2,$num3){
            $resultado2 = $num1+$num2+$num3;
            return $resultado2;
        }

        $valores = [5,6,5];
        echo sumaarray(...$valores);

        echo '<br/>';

        diAdios();

        function divide($n1,$n2) :int {
            echo '<br/>';
            $result3 = $n1/$n2;
            return $result3;
        }

        echo divide(7,3);

        #####################

        function suma2($n1,$n2){
            $resultado = $n1 + $n2;
            return $resultado;
        }

        function multi($n1,$n2){
            $resultado = $n1*$n2;
            return $resultado;
        }

        function calcular ($operacion,$numero1,$numero2){
            $resulcalcular = $operacion($numero1,$numero2);
            return $resulcalcular;
        }

        echo '<hr>';
        echo '<br/>',calcular('multi',4,6);
    ?>  
</body>
</html>