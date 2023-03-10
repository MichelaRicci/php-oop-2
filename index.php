<?php

include __DIR__ . '/data/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>E-commerce</title>
</head>
<body>


    <div class="container">
        <h2>Alimenti</h2>
        <div class="row">

            <?php foreach ($food as $product) : ?>
                <div class="col-4">
                    <div class="card my-4">
                        <img src=<?= $product->img ?> alt=<?= $product->name ?>>
                        <div class="card-body">
                            <h5><?= $product->name ?></h5>
                            <p> <?= $product->description ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <strong> Marca: </strong> <?= $product->brand ?></li>
                            <li class="list-group-item"> <strong> Prezzo: </strong> <?= $product->price ?></li>
                            <li class="list-group-item"> <strong> Peso: </strong> <?= $product->weight ?></li>
                            <li class="list-group-item mb-0"><strong> Categoria: </strong> <?= $product->category->animal ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


    
</body>
</html>