<?php
require_once 'LeitorArquivo.php';

$arquivo = new LeitorArquivo('info/dados.txt');
try {
    echo "Abrindo arquivo...\n";
    $arquivo->abrir();

    echo "Lendo conteúdo do arquivo...<br>";
    echo $arquivo->ler();
} catch (Exception $e){
    echo "Erro detectado: " . $e->getMessage() . "<br>";
} finally {
    $arquivo->fechar();
}
?> 