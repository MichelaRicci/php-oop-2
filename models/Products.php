<?php
require_once __DIR__ . '/Categories.php';

class Product
{
    public $name;
    public $img;
    public $brand;
    public $price;
    public $description;
    public $category;

    public function __construct($name, $img, $brand, $price, $description, $category)
    {
        $this->name = $name;
        $this->img = $img;
        $this->brand = $brand;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }

    public function print(){
        return "$this->name.$this->img.$this->brand.$this->price.$this->description.$this->category";
    }


}

?>