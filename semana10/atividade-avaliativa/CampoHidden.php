<?php
class CampoHidden {
    private $nome;
    private $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function renderizar() {
        return '<input type="hidden" name="' . $this->nome . '" value="' . $this->valor . '">';
    }
}
?>