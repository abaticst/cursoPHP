<?php
    class Coche{
        public $color;
        public $marca;
        public $modelo;
        public $plazas;
        public $puertas;
        public $velocidad;

        //METODO CONSTRUCTOR DE LA CLASE

        /*public function __construct(){
            $this->color = "Verde";
            $this->marca = "Kia";
            $this->modelo = "Carens";
            $this->plazas = 7;
            $this->puertas = 5;
            $this->velocidad = 0;
        }*/

        public function __construct($color,$marca,$modelo,$plazas,$puertas,$velocidad){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->plazas = $plazas;
            $this->puertas = $puertas;
            $this->velocidad = $velocidad;
        }

        public function __destruct(){
            echo "<p>Eliminado el coche $this->modelo</p>";
        }

        public function __toString(){
            return "El metodo __toString me devuelve:  $this->modelo - $this->marca";
        }
    }
?>