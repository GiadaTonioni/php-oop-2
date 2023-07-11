<?php

require_once __DIR__.'/Models/Prodotti.php';
require_once __DIR__.'/Models/Cibo.php';
require_once __DIR__.'/Models/Accessori.php';
require_once __DIR__.'/Models/Giochi.php';

$prodotti = new Prodotti('Test prodotto', 'httpsimmagine.jpg', 34.10, 'Cane');
 var_dump($prodotti)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card"></div>
            </div>
        </div>
    </div>
</body>
</html>