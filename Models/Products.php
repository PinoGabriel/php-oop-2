<?php

include_once __DIR__ . '/Category.php';
include_once __DIR__ . '/User.php';
class Products
{
    public $image;
    public $productName;
    public $category;
    public $price;
    public $user;


    public function __construct($image, $productName, Category $category, $price, User $user)
    {
        $this->image = $image;
        $this->productName = $productName;
        $this->category = $category;
        $this->price = $price;
        $this->user = $user;
    }

    public function getName()
    {
        return $this->productName;
    }
}
