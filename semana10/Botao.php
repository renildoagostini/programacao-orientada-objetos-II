<?php


class Botao {
    protected $nome;
    protected $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function renderizar() {
        return '<button type="' . $this->tipo . '" name="' . $this->nome . '">' . $this->valor . '</button>';
    }
}


?>
