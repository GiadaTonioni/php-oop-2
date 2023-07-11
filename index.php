<?php

require_once __DIR__.'/Models/Prodotti.php';
require_once __DIR__.'/Models/Cibo.php';
require_once __DIR__.'/Models/Accessori.php';
require_once __DIR__.'/Models/Giochi.php';

//$prodotti = new Prodotti('Test prodotto', 'httpsimmagine.jpg', 34.10, 'Cane');
 //var_dump($prodotti)

 $prodotti = [
    new Cibo('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 43.99, 'Cani', 545, 'prosciutto, riso'),
    new Cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, 'Cani', 600, 'manzo, cereali'),
    new Cibo('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, 'Gatti', 400, 'tonno, pollo, prosciutto'),
    new Cibo('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2.95, 'Pesci', 30, 'Pesci e sottoprodotti dei pesci, cereali, lieviti, alghe'),
    new Accessori('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 184.99, 'Uccelli', 'Legno', 'L 83 x P 67 x H 153 cm'),
    new Accessori('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 2.29, 'Pesci', 'Materiale espanso', 'ND'),
    new Giochi('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 13.49, 'Cani', '8,5 x 10 cm', 'Galleggia e Rimbalza'),
    new Giochi('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99, 'Gatti', '8,5 x 10 cm', 'morbido con codina in corda'),

];

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