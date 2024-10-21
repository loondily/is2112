<?php

use Templates\ProductsTemplate;
use Services\FileStorage;

$store = new FileStorage();
$arrData = $store->loadData('data.json');

$templ = new ProductTemplate();
echo $templ->getTemplate($arrData);