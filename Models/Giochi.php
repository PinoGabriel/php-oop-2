<?php
include_once __DIR__ . '/Products.php';
class Giochi extends Products
{
    public $texture;

    public function __construct($image, $productName, Category $category, $price, $texture)
    {
        parent::__construct($image, $productName, $category, $price);
        $this->texture = $texture;
    }
}
