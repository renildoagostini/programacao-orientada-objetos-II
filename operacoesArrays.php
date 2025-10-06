<?php 
    $contato = array();
    $contato['nome'] = 'Renildo';
    $contato['empresa'] = 'XYZ';
    $contato['peso'] = 80;

    //alterações
    $contato['nome'] = 'Estevão';
    $contato['empresa'] = 'Ltda';
    $contato['peso'] += 2;
    print_r($contato);

    echo "<br><br><br>";
    echo "<hr>";
?>


<?php 
    $comida = array();
    $comida[] = 'Arroz';
    $comida[] = 'Feijão';
    $comida[] = 'Macarrão';

    //alterações
    $comida[1] = 'Ervilha';

    print_r($comida);
?>