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
                            <h5 class="card-title"><?= "Nome prodotto: " . $object->productName ?></h5>
                            <p class="card-text"><?= "Categoria: " . get_class($object) ?></p>
                            <p class="card-text"><?= "Tipo: " . $object->type ?></p>
                            <p class="card-text"><?= "Prezzo: " . $object->price ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>


</body>

</html>