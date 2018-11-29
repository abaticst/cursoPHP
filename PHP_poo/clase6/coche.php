<?php
    class Coche{
        public $color;
        protected $marca;
        private $modelo;
        public $plazas;
        public $puertas;
        public $velocidad;

        //METODO CONSTRUCTOR DE LA CLASE

        public function __construct(){
            $this->color = "Verde";
            $this->marca = "Kia";
            $this->modelo = "Carens";
            $this->plazas = 7;
            $this->puertas = 5;
            $this->velocidad = 0;
        }

        /*public function __construct($color,$marca,$modelo,$plazas,$puertas,$velocidad){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->plazas = $plazas;
            $this->puertas = $puertas;
            $this->velocidad = $velocidad;
        }*/

        /*public function __destruct(){
            echo "<p>Eliminado el coche $this->modelo</p>";
        }*/

        public function __toString(){
            return "El metodo __toString me devuelve:  $this->modelo - $this->marca";
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function dimeDatos(Coche $objeto){
            if (is_object($objeto)){
                $datos = '<h2>Aqui tienes los datos de tu coche</h2>';
                $datos .= "<p>El color es " . $objeto->color . ". Es un modelo " . $objeto->modelo . 
                " de la marca " . $objeto->marca . "</p>";
                $datos .= "<p>Tiene " . $objeto->puertas . " puertas, además de " . $objeto->plazas . 
                " plazas.</p>";
            } else {
                $datos = "No has pasado un objeto; esto es lo que he recibido: $objeto";
            }

            return $datos;
        }
    }
?>