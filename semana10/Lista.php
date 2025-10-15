<?php


class Lista {
    private $titulo;
    private $itens = [];

    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    public function adicionarItem($item) {
        $this->itens[] = $item;
    }

    public function renderizar() {
        $html = '<h2>' . $this->titulo . '</h2>';
        $html .= '<ul>';
        foreach ($this->itens as $item) {
            $html .= '<li>' . $item->renderizar() . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}

?>
