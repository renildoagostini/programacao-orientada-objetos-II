<?php 
    $carros = array();
    $carros['modelo'] = 'Fusca';
    $carros['fabricante'] = 'Volkswagen';
    $carros['cor'] = 'Cinza';
    $carros['ano'] = '1983';
    
    foreach ($carros as $chave =>$carro) {
        echo "$chave => $carro<br>\n";
    }

    
?>