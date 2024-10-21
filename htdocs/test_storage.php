<?php 

use Services\FileStorage;

$store = new FileStorage();
$arrData = [
    [
        'id' => 11, 
        'name' => 'Сметана Простоквашино', 
        'description' => '',
        'image' => "./img/smetana.png",
        'weigth' => 100, 
        'price' => 70,
    ],
    [
        'id' => 12, 
        'name' => 'Яйца С1', 
        'description' => '',
        'image' => "./img/eggs.png",
        'weigth' => 250, 
        'price' => 120,
    ],
    [
        'id' => 13,
        'name' => 'Колбаса', 
        'description' => '',
        'image' => "./img/kolbasa.png",
        'weigth' => 200, 
        'price' => 150,
    ],
    [
        'id' => 14,
        'name' => 'Драже M&Ms', 
        'description' => '',
        'image' => "./img/mandms.png",
        'weigth' => 100, 
        'price' => 150,
    ],
    [
        'id' => 15,
        'name' => 'Лапша Доширак', 
        'description' => '',
        'image' => "./img/doshik.png",
        'weigth' => 120, 
        'price' => 40,
    ]
];
    
$store->saveData('data.json', $arrData);
$arrData = $store->loadData('data.json');
var_dump($arrData);