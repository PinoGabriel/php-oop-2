<?php
include_once __DIR__ . '/Products.php';
class Cibo extends Products
{

    public $weight;

    public function __construct($image, $productName, Category $category, $price, $weight)
    {
        parent::__construct($image, $productName, $category, $price);
        $this->weight = $weight;
    }
}
