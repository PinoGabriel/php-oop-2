<?php
include __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-4">

        <div class="row">
            <?php foreach ($objects as $object) { ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img d-flex justify-content-center pb-4" src="<?= $object->image ?>" alt="">
                            <h6 class="card-title pb-3"><?= "Cliente: " . $object->user->log ?></h6>
                            <h5 class="card-title pb-3"><?= "Nome prodotto: " . $object->productName ?></h5>
                            <p class="card-text"><?= "Categoria: " . $object->category->name ?></p>
                            <p class="card-text"><?= "Tipo: " . get_class($object) ?></p>
                            <p class="card-text"><?php if ($object->user->log == "registrato") {
                                                        $discountedPrice = number_format($object->price * 0.8, 2);
                                                        echo "Prezzo scontato: " . $discountedPrice . "€";
                                                    } else {
                                                        echo "Prezzo: " . number_format($object->price, 2) . "€";
                                                    } ?>
                            </p>
                            <p class="card-text"><?php
                                                    if ($object instanceof Cucce) {
                                                        echo "Dimensioni: " . $object->size;
                                                    } else if ($object instanceof Giochi) {
                                                        echo "Tessuto: " . $object->texture;
                                                    } elseif ($object instanceof Cibo) {
                                                        echo "Peso: " . $object->weight . "g";
                                                    } ?>
                            </p>
                            <p class="card-text"><?php
                                                    if ($object instanceof Cucce) {
                                                        echo "Colore: " . $object->color;
                                                    } ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>


</body>

</html>