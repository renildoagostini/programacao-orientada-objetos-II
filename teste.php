<?php 
    include_once 'Pessoa.class.php';

    $obj = new Pessoa();

    $obj -> setNome("Renildo Ribeiro Agostini");
    
    echo $obj -> getNome();
?>