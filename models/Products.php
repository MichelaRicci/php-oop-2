<?php

class Products
{
    public $name;
    public $img;
    public $brand;
    public $price;
    public $description;
    public $category;

    public function __construct($name, $brand, $price, $description, $category)
    {
        $this->$name;
        $this->$brand;
        $this->$price;
        $this->$description;
        $this->$category;
    }
}

?>