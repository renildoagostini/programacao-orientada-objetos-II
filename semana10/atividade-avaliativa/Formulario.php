<?php


class Formulario {
    private $titulo;
    private $action;
    private $method;
    private $campos = [];
    private $botoes = [];

    public function __construct($titulo, $action, $method) {
        $this->titulo = $titulo;
        $this->action = $action;
        $this->method = $method;
    }

    public function adicionarCampo($campo) {
        $this->campos[] = $campo;
    }

    public function adicionarBotao($botao) {
        $this->botoes[] = $botao;
    }

    public function renderizar() {
        $html = '<h2>' . $this->titulo . '</h2>';
        $html .= '<form action="' . $this->action . '" method="' . $this->method . '">';
        foreach ($this->campos as $campo) {
            $html .= $campo->renderizar();
        }
        foreach ($this->botoes as $botao) {
            $html .= $botao->renderizar();
        }
        $html .= '</form>';
        return $html;
    }
}


?>

