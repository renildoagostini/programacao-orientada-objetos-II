<?php


class CampoTexto {
    protected $nome;
    protected $rotulo;
    protected $obrigatorio;

    public function __construct($nome, $rotulo, $obrigatorio) {
        $this->nome = $nome;
        $this->rotulo = $rotulo;
        $this->obrigatorio = $obrigatorio;
    }

    public function renderizar() {
        $html = '<label for="' . $this->nome . '">' . $this->rotulo . '</label>';
        $html .= '<input type="text" name="' . $this->nome . '" id="' . $this->nome . '"';
        if ($this->obrigatorio) {
            $html .= ' required';
        }
        $html .= '><br>';
        return $html;
    }
}

?>