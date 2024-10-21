<?php

use Routers\Router;

$obj = new Router();
echo $obj->route('https://mysite.ru/products') ."\n";      // Вызван метод getAll() из класса Product'
echo $obj->route('https://mysite.ru/products/12') ."\n";   // Вызван метод get() из класса Product'
echo $obj->route('https://mysite.ru/orders') ."\n";        // Вызван метод create() из класса Order

exit;

//$url = "https://mysite.ru/products/12";
$url = "https://mysite.ru/products/12/";
//     /products/12
$path = parse_url($url, PHP_URL_PATH);


$pieces = explode("/", $path);
foreach( $pieces as $key => $item ) {
    echo $key. " - ". $item . "\n";
}

if (isset($pieces[2]) && !empty($pieces[2])) {
    echo "Идентификатор найден = ".$pieces[2]."\n";
} else
    echo "Нет идентификатора\n";

$resource = $pieces[1];
switch ($resource) {
    case "products":
        echo "Найден ресурс для класса Product";
        break;
    case "orders":
        echo "Найден ресурс для класса Order";
        break;
    default:
        echo "Не удалось установить какой ресурс - Упс..";
}
/*
    Мы можем получить путь запроса вида /products/{id}
    используя функцию parse_url
    $path = parse_url($url, PHP_URL_PATH);
    
    а отдельные компоненты (products, id)
    используя функцию explode
    $pieces = explode("/", $path);

    При этом:
    - название ресурса - $pieces[1]
    - id ресурса - $pieces[2]

    id задан если
    if (isset($pieces[2]) && !empty($pieces[2])) 
    

*/