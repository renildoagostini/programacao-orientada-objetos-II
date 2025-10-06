<?php 
    class Motor{
        public function ligar(){
            echo "Motor ligado<br>";
        }
    }

    class Rodas{
        public function girar(){
            echo "Rodas girando<br>";
        }
    }

    class Carro{
        private $motor;
        private $rodas;

        public function  __construct(){
            $this->motor = new Motor();
            $this->rodas = new Rodas();
        }
        

        public function ligar(){
            $this->motor->ligar();
        }

        public function mover(){
            $this->rodas->girar();
        }
    }

    $carro = new Carro();
    $carro->ligar();
    $carro->mover();
?>