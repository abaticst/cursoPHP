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

        $array1 = array(1,82,3,74,5,27,50);
        $noarray = "Ey, yo no soy un array";
        
        //is_array

        if(is_array($noarray)){
            echo "Es un array<br/>";
        } else {
            echo "No es un array<br/>";
        }
        echo '<hr>';
        //count

        echo count($array1),'<br/>';
        echo '<hr>';
        //in_array

        if(in_array("pajaro",$array1)){
            echo "Si esta en el array";
        } else {
            echo "no esta en el array<br/>";
        }
        echo '<hr>';

        //array_search

        echo array_search("Maria",$array1);

        echo '<hr>';

        //sort

        echo "Primero usamos sort<br/>";
        sort($array1);
        foreach($array1 as $valorsort){
            echo $valorsort,'<br/>';
        }

        echo "Primero usamos sort<br/>";
        rsort($array1);
        foreach($array1 as $valorsort){
            echo $valorsort,'<br/>';
        }

        echo '<hr>';

        //array_sum

        echo array_sum($array1);

        echo '<hr>';

        //max y min

        echo max($array1);
        echo '<br/>',min($array1);

        echo '<hr>';

        //array_push

        array_push($array1,"Paco",77);
        print_r($array1);

        //array_unshift

        array_unshift($array1,"Isabel",17);
        echo '<br/>';
        print_r($array1);
        echo '<br/>';

        $ultimo = array_pop($array1);
        echo $ultimo;
        echo '<br/>';
        print_r($array1);

    ?>
</body>
</html>