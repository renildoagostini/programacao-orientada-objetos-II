<?php 
    trait Logger{
        public function log($mensagem){
            echo  $mensagem;
        }
    }

    trait Validador{
        public function validarEmail($email){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    }

    class Usuario{
        use Logger, Validador;

        public function criarUsuario($email){
            if($this->validarEmail($email)){
                $this->log("Criando usuário com email: $email");
            }else{
                $this->log("Email invalido: $email");
            }
        }
    }

    $usuario = new Usuario();
    $usuario->criarUsuario("exemplo@exemplo.com");
    
?>