<?php 
    class Pessoa{
        private $nome;

        public function setNome($x){
            $this -> nome = $x;
        }
        
        public function getNome(){
            return $this -> nome;
        }
    }
?>