<?php
/*Exercici 2-Imagina que som a una botiga on es ven:
    Xocolata: 1 euro
    Xiclets: 0,50 euros
    Caramels: 1,50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.

*/

define("PREU_XOCOLATES",1);
define("PREU_XICLETS",0.5);
define("PREU_CARAMELS",1.5);
function compraTotal($xocolates,$xiclets,$caramels){
    //$preuXocolates=1; $preuXiclets=0.5; $preuCaramels=1.5;

    $totalPreuXocolates = $xocolates*PREU_XOCOLATES;
    $totalPreuXiclets = $xiclets*PREU_XICLETS;
    $totalPreuCaramels = $caramels*PREU_CARAMELS;

    $total = $totalPreuXocolates + $totalPreuXiclets + $totalPreuCaramels;

    return $total;
}

$total = compraTotal(2,1,1);
echo "El preu total de compra és: $total €";


?>
