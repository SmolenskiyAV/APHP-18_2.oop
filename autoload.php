<?php

function libraryOne($classname) {
    $file = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $classname).'.php';
    if (file_exists($file)) {
        require_once($file);
    }
}
// регистрация
spl_autoload_register('libraryOne');