<?php
spl_autoload_register(function ($class_name) {
    // Converte o namespace para o caminho do arquivo
    $file_path = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    // Verifica se o arquivo existe e o inclui
    if (file_exists($file_path)) {
        include $file_path;
    }
});

?>