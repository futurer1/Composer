<?php
/**
* Функция вызывается автоматически при необходимости подключения нового класса.
* Желательно делать такую структуру кода, чтобы имя класса соответствовало имени файла php в котором он находится.
* Данный прием уже устаревает.
*/
function __autoload($className)
{
    $class_pieces = explode("\\", $className);
    switch($class_pieces[0]) {
        case "tmp1":
            require __DIR__ . "/../" . implode(DIRECTORY_SEPARATOR, $class_pieces) . ".php";
            break;
        case "tmp2":
            require __DIR__ . "/../vendor/" . implode(DIRECTORY_SEPARATOR, $class_pieces) . ".php";
            break;
    }
}

$obj = new folderproject\NewClass();    //в переменную $className попадет значение "folderproject\NewClass"
