<?php 
require_once __DIR__ . ("/classi/Prodotto.php");
require_once __DIR__ . ("/classi/Accessorio.php");
require_once __DIR__ .("/classi/Cibo.php");
require_once __DIR__ . ("/classi/Gioco.php");

// Categoria CANE
$ciboCaneUno = new Cibo("Cane", "43,99 euro", "54g", "Prosciutto e riso");
$ciboCaneDue = new Cibo("Cane", "44,99 euro", "600g","Manzo e cereali");
$giocoCane = new Gioco("Cane", "13,49 euro", "Galleggia e rimbalza", "8,5 cm x 10 cm");

// Categoria GATTO
$ciboGatto = new Cibo("Gatto", "34,99 euro", "400g", "Tonno, pollo, prosciutto");
$giocoGatto = new Gioco("Gatto", "4,99 euro", "Morbido con codina in corda", "8,5 cm x 10 cm");

// Categoria PESCE
$ciboPesce = new Cibo("Pesce", "2,95 euro", "30g", "Cereali, lieviti alghe");
$accessorioPesce = new Accessorio("Pesce", "2,29 euro", "Materiale espanso","ND");

// Categoria UCCELLO
$accessorioUccello = new Accessorio("Uccello", "184,99 euro","Legno","100 cm x 200 cm");

var_dump($ciboCaneUno, $ciboCaneDue, $giocoCane, $ciboGatto, $giocoGatto, $ciboPesce, $accessorioPesce, $accessorioUccello);
