<?php
require_once __DIR__ . ("/classi/Prodotto.php");
require_once __DIR__ . ("/classi/Accessorio.php");
require_once __DIR__ . ("/classi/Cibo.php");
require_once __DIR__ . ("/classi/Gioco.php");

// Categoria CANE
$ciboCaneUno = new Cibo("Cane", "43,99 euro", "54g", "Prosciutto e riso");
$ciboCaneDue = new Cibo("Cane", "44,99 euro", "600g", "Manzo e cereali");
$giocoCane = new Gioco("Cane", "13,49 euro", "Galleggia e rimbalza", "8,5 cm x 10 cm");

// Categoria GATTO
$ciboGatto = new Cibo("Gatto", "34,99 euro", "400g", "Tonno, pollo, prosciutto");
$giocoGatto = new Gioco("Gatto", "4,99 euro", "Morbido con codina in corda", "8,5 cm x 10 cm");

// Categoria PESCE
$ciboPesce = new Cibo("Pesce", "2,95 euro", "30g", "Cereali, lieviti alghe");
$accessorioPesce = new Accessorio("Pesce", "2,29 euro", "Materiale espanso", "ND");

// Categoria UCCELLO
$accessorioUccello = new Accessorio("Uccello", "184,99 euro", "Legno", "100 cm x 200 cm");

// var_dump($ciboCaneUno, $ciboCaneDue, $giocoCane, $ciboGatto, $giocoGatto, $ciboPesce, $accessorioPesce, $accessorioUccello);

?>

<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BoolShop</title>
</head>

<body>

    <header>
        <h1 class="text-center">
            BoolShop
        </h1>
    </header>

    <main>
        <div class="d-flex">
            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Royal Canini Mini Adult
                    </h6>
                    <p class="card-text">
                        <?php echo ($ciboCaneUno->getCategoria()) ?>
                    </p>
                    <p>
                        <?php echo ($ciboCaneUno->getPrezzo()) ?>
                    </p>
                    <p>
                        <?php echo ($ciboCaneUno->getPeso()) ?>
                    </p>
                    <p>
                        <?php echo ($ciboCaneDue->getIngredienti()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Almo Nature Holistic Maintenance Medium Large Tonno e Riso
                    </h6>
                    <p class="card-text">
                        <?php echo ($ciboCaneDue->getCategoria()) ?>
                    </p>
                    <p>
                        <?php echo ($ciboCaneDue->getPrezzo()) ?>
                    </p>
                    <p>
                        <?php echo ($ciboCaneDue->getPeso()) ?>
                    </p>
                    <p>
                        <?php echo ($ciboCaneDue->getIngredienti()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Almo Nature Cat Daily Lattina
                    </h6>
                    <p class="card-text">
                        <?php echo ($ciboGatto->getCategoria()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($ciboGatto ->getPrezzo()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($ciboGatto ->getPeso()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($ciboGatto ->getIngredienti()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Mangime per Pesci Guppy in Fiocchi
                    </h6>
                    <p class="card-text">
                        <?php echo ($ciboPesce->getCategoria()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($ciboPesce->getPrezzo()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($ciboPesce->getPeso()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($ciboPesce->getIngredienti()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Voliera Wilma in Legno
                    </h6>
                    <p class="card-text">
                        <?php echo ($accessorioUccello->getCategoria()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($accessorioUccello->getPrezzo()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($accessorioUccello->getMateriale()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($accessorioUccello->getDimensioni()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Cartucce Filtranti per Filtro EasyCrystal
                    </h6>
                    <p class="card-text">
                        <?php echo ($accessorioPesce->getCategoria()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($accessorioPesce->getPrezzo()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($accessorioPesce->getMateriale()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($accessorioPesce->getDimensioni()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Kong Classic
                    </h6>
                    <p class="card-text">
                        <?php echo ($giocoCane->getCategoria()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($giocoCane->getPrezzo()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($giocoCane->getCaratteristiche()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($giocoCane->getDimensioni()) ?>
                    </p>
                </div>
            </div>

            <div class="card me-4" style="width: 18rem;">
                <img src="https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg" class="card-img-top" alt="Royal Canini">
                <div class="card-body">
                    <h6>
                        Topini di peluche Trixie
                    </h6>
                    <p class="card-text">
                        <?php echo ($giocoGatto->getCategoria()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($giocoGatto->getPrezzo()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($giocoGatto->getCaratteristiche()) ?>
                    </p>
                    <p class="card-text">
                        <?php echo ($giocoGatto->getDimensioni()) ?>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>