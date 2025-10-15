<?php


class CampoEmail extends CampoTexto {
    public function renderizar() {
        $html = '<label for="' . $this->nome . '">' . $this->rotulo . '</label>';
        $html .= '<input type="email" name="' . $this->nome . '" id="' . $this->nome . '"';
        if ($this->obrigatorio) {
            $html .= ' required';
        }
        $html .= '><br>';
        return $html;
    }
}

?>