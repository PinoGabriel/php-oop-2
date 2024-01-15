<?php
include_once __DIR__ . '/Cani.php';
class Products
{
    public $productName;
    public $category;
    public $type;
    public $price;


    public function __construct($productName, $category, $type, $price)
    {
        $this->productName = $productName;
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->category;
    }
}
