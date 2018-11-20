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
        class MiClase{
            //Atributos de la clase

            //Metodos de la clase

            #Se suelen  diferenciar entre setters y getters

            #  $this;
        }

        class Coche{
            //Atributos de la clase

            public $color="Verde";
            public $marca;
            public $modelo;
            public $plazas;
            public $puertas;
            public $velocidad = 0;

            //Metodos de la clase

            public function getColor(){
                return $this->color;
            }

            public function setColor($color){
                $this->color = $color;
            }

            public function acelerar(){
                $this->velocidad++;
            }

            public function frenar(){
                $this->velocidad--;
            }

            public function getVelocidad(){
                return $this->velocidad;
            }            
        }

        $coche = new Coche();
        
        //var_dump($coche);
        echo "<br/>Tu coche es de color " . $coche->getColor();
        
        echo "<br/>La velocidad actual es de: " . $coche->getVelocidad() . " km/h";

        $coche->setColor("Amarillo");
        
        echo "<br/>Tu coche es de color " . $coche->getColor();

        $coche->acelerar();
        $coche->acelerar();
        $coche->acelerar();
        $coche->acelerar();
        echo "<br/>La velocidad actual es de: " . $coche->getVelocidad() . " km/h";
        $coche->frenar();
        echo "<br/>La velocidad actual es de: " . $coche->getVelocidad() . " km/h";



    ?>
</body>
</html>