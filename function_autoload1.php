/**
* Развитие темы с функцией автозагрузки.
*/
function myAutoload($className)
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

spl_autoload_register(myAutoload, true, true); //Регистрирует заданную функцию в качестве реализации метода __autoload() 
//Подробнее: https://php.ru/manual/function.spl-autoload-register.html
