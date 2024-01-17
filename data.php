<?php
include __DIR__ . '/Models/Products.php';
include_once __DIR__ . '/Models/Cibo.php';
include_once __DIR__ . '/Models/Giochi.php';
include_once __DIR__ . '/Models/Cucce.php';
include_once __DIR__ . '/Models/Category.php';

$cani = new Category("Cani", "lorem");
$gatti = new Category("Gatti", "lorem");

$ospiteRegistrato = new User("registrato", 20);
$ospiteNonRegistrato = new User("ospite", 0);

$objects = [
    new Cibo(
        "https://rawznaturalpetfood.com/wp-content/uploads/RAWZ_Dog_96_Beef_can_web.png",
        "Akita Crock",
        $cani,
        21.99,
        $ospiteNonRegistrato,
        354
    ),

    new Giochi(
        "https://www.amicisulserio.it/images/virtuemart/product/resized/GIOCO_BAM_BONES__5b0e29b13eec8_450x450.png",
        "Osso finto",
        $cani,
        3.99,
        $ospiteRegistrato,
        "Plastica"
    ),

    new Cucce(
        "https://zooroom.eu/cdn/shop/products/1_5ecd912d-dd42-4aad-95d5-93c2d02411be.png?v=1625474751",
        "Cuccia rotonda",
        $cani,
        61.99,
        $ospiteNonRegistrato,
        "60cm",
        "Marrone"
    ),

    new Cibo(
        "https://www.progettopet.it/ecommerce/it/gatto/alimentazione-specifica-adulti/c2715/1_Animonda-Carny-Drink-Gatti-Tonno-per-GATTI-4017721835923MA-formato-confezione.jpg-rid-1120.png",
        "Tonno per gatti",
        $gatti,
        21.99,
        $ospiteNonRegistrato,
        140,
    ),

    new Giochi(
        "https://media.istockphoto.com/id/1312084086/it/foto/morbido-filato-di-lana-blu-isolato-su-bianco-vista-dallalto.jpg?s=612x612&w=0&k=20&c=xMARi00VlLtsbYrPH5whKf9Ck4dolq5AGYLqb4b_lqE=",
        "Gomitolo di Lana",
        $gatti,
        3.99,
        $ospiteNonRegistrato,
        "Lana"
    ),

    new Cucce(
        "https://i.ebayimg.com/images/g/h~wAAOSwArFi3TDZ/s-l400.png",
        "Cuccia rotonda",
        $gatti,
        61.99,
        $ospiteRegistrato,
        "60cm",
        "Grigio"
    ),
];
