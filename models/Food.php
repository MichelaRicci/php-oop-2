<?php

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/Categories.php';

class Food extends Product
{
    public $weight;


    public function __construct($name, $img, $brand, $price, $description, $category, $weight){
        
        parent::__construct($name, $img, $brand, $price, $description, $category);
        $this->weight = $weight;
  
    }
}