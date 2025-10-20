<?php


class Pagina {
    private $titulo;
    private $elementos = [];

    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    public function adicionarElemento($elemento) {
        $this->elementos[] = $elemento;
    }

    public function renderizar() {
        $html = '<!DOCTYPE html>';
        $html .= '<html lang="pt-br">';
        $html .= '<head>';
        $html .= '<meta charset="UTF-8">';
        $html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $html .= '<title>' . $this->titulo . '</title>';
        $html .= '</head>';
        $html .= '<body>';
        foreach ($this->elementos as $elemento) {
            $html .= $elemento->renderizar();
        }
        $html .= '</body>';
        $html .= '</html>';
        return $html;
    }
}
?>
