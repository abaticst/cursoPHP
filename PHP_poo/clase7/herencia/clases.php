<?php
    class Animal {
        public $tipo;
        public $patas;
        public $alimentacion;

        //CONSTRUCTOR

        public function __construct(){
            $this->tipo="";
            $this->patas="";
            $this->alimentacion="Omnivoro";
        }

        //SETTER

        public function setTipo($tipo){
            $this->tipo=$tipo;
        }

        public function setPatas($patas){
            $this->patas=$patas;
        }

        public function setAlimentacion($alimentacion){
            $this->alimentacion=$alimentacion;
        }

        //GETTER

        public function getTipo(){
            return $this->tipo;
        }

        public function getPatas(){
            return $this->patas;
        }

        public function getAlimentacion(){
            return $this->alimentacion;
        }

        //Otros metodos

        public function comer(){
            return "Estoy comiendo";
        }

        public function dormir(){
            return "ZzZ";
        }
    }

    /*

    */

    class Perro extends Animal{
        public $raza;

        public function olisquear(){
            return "Estoy oliendo algo";
        }

        public function jugar(){
            return "Ese palo es para mi";
        }

        public function __construct(){
            $this->raza="Galgo";
            parent::__construct();
        }
    }

    /*

    */

    class Casero extends Perro{
        public $duerme;

        public function actividad(){
            return "Estoy esperando a salir a la calle";
        }

        public function __construct(){
            $this->duerme = "Dentro";
            parent::__construct();

        }
    }
?>