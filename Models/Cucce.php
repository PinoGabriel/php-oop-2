<?php
include_once __DIR__ . '/Products.php';
class Cucce extends Products
{
    public $size;
    public $color;

    public function __construct($image, $productName, Category $category, $price, User $user, $size, $color)
    {
        parent::__construct($image, $productName, $category, $price, $user);
        $this->size = $size;
        $this->color = $color;
    }
}
