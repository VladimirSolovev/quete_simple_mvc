<?php
// src/Controller/ItemController.php

namespace Controller;

use Model\ItemManager;

class ItemController {

    public function index() {
        $itemManager = new \Model\ItemManager();
        $items =$itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
    }

}


?>