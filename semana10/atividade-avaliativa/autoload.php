<?php
spl_autoload_register(function ($class_name) {
    $file_path = __DIR__ . DIRECTORY_SEPARATOR . $class_name . '.php';
    if (file_exists($file_path)) {
        include $file_path;
    }
});
?>