<?php
class BotaoSubmit extends Botao {
    public function __construct($nome, $valor) {
        parent::__construct($nome, $valor, "submit");
    }
}
?>