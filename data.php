<?php
include __DIR__ . '/Models/Products.php';
include_once __DIR__ . '/Models/Cani.php';
include_once __DIR__ . '/Models/Gatti.php';

$objects = [
    new Cani(
        "Akita Crock",
        "x",
        Cibo::class,
        "21,99€"
    ),

    new Cani(
        "Osso finto",
        "x",
        Giochi::class,
        "3,99€"
    ),

    new Cani(
        "Cuccia rotonda",
        "x",
        Cucce::class,
        "61,99€"
    ),

    new Gatti(
        "Tonno per gatti",
        "x",
        Cibo::class,
        "21,99€"
    ),

    new Gatti(
        "Gomitolo di Lana",
        "x",
        Giochi::class,
        "3,99€"
    ),

    new Gatti(
        "Cuccia rotonda",
        "x",
        Cucce::class,
        "61,99€"
    ),
];
