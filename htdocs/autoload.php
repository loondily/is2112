<?php
function autoloadClasses($className)
{
    $class = str_replace('\\', '/', $className);
    $path = "./". $class.".php";
    if (file_exists($path)) {
        require_once($path);
    }
}

spl_autoload_register("autoloadClasses");