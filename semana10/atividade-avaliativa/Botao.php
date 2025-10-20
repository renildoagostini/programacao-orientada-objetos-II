<?php
class Botao {
    protected $nome;
    protected $valor;
    protected $tipo;

    public function __construct($nome, $valor, $tipo = "button") {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    public function renderizar() {
        return '<button type="' . $this->tipo . '" name="' . $this->nome . '">' . $this->valor . '</button>';
    }
}
?>