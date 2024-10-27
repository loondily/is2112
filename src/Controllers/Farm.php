<?php
namespace Controllers;

use Models\FarmDBStorage;
use Views\FarmTemplate;

class Farm {
    public function getAll(): string 
    {
        $objTemplate = new FarmTemplate();
        $storage = new FarmDBStorage();
        $result = $storage->getAll();
        $template = $objTemplate->getFarmTemplate($result);
        return $template;
    }    

    public function add($row)
    {
        $storage = new FarmDBStorage();
        $result = $storage->add($row);
        return $result;
    }

    public function getForm() {
        $objTemplate = new FarmTemplate();
        $template = $objTemplate->getFormTemplate();
        return $template;
    }
}