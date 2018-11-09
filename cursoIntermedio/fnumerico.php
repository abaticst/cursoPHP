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
        $num1 = -5;
        $num2 = -2.4;
        $num3 = 2.6;
        $num4 = 7.2;
        $num5 = 50;
        $num6 = 110010;
        $num7 = 32;
        $num8 = 62;

        //abs
        echo abs($num1),'<br/>';
        echo abs($num2),'<br/>';

        echo '<hr>';

        //ceil

        echo ceil($num3),'<br/>';
        echo ceil($num4),'<br/>';

        echo '<hr>';

        //floor

        echo floor($num3),'<br/>';
        echo floor($num4),'<br/>';

        echo '<hr>';

        //decbin

        echo decbin($num5),'<br/>';
        echo bindec($num6),'<br/>';
        echo dechex($num5),'<br/>';
        echo hexdec($num7),'<br/>';
        echo decoct($num5),'<br/>';
        echo octdec($num8),'<br/>';
        
        
        echo '<hr>';

        //pi

        echo pi();

        echo '<hr>';

        //pow

        echo pow(4,3);

        echo '<hr>';

        //rand

        echo rand(),'<br/>';
        echo rand(0,10),'<br/>';

        echo '<hr>';

        //round

        echo round($num3),'<br/>';
        echo round($num4),'<br/>';

        echo '<hr>';

        //sqrt

        echo sqrt(4),'<br/>';

        echo '<hr>';

        //bcdiv

        echo bcdiv(pi(),'1','4');
    ?>
</body>
</html>