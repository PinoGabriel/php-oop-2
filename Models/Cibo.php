<?php
include_once __DIR__ . '/Products.php';
class Cibo extends Products
{

    public $weight;

    public function __construct($image, $productName, Category $category, $price, User $user, $weight)
    {
        parent::__construct($image, $productName, $category, $price, $user);
        $this->weight = $weight;
    }
}
