<?php

include_once __DIR__ . '/Category.php';
class Products
{
    public $image;
    public $productName;
    public $category;
    public $price;


    public function __construct($image, $productName, Category $category, $price)
    {
        $this->image = $image;
        $this->productName = $productName;
        $this->category = $category;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->productName;
    }
}
