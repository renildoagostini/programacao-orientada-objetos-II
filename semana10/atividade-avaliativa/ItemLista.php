<?php


class ItemLista {
    private $conteudo;
    private $elementos = [];

    public function __construct($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function adicionarElemento($elemento) {
        $this->elementos[] = $elemento;
    }

    public function renderizar() {
        $html = $this->conteudo;
        foreach ($this->elementos as $elemento) {
            $html .= $elemento->renderizar();
        }
        return $html;
    }
}

?>