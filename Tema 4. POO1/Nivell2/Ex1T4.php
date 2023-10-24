<?php

/*Exercici 1-  Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.*/

require_once "PokerDice.php";

$numeroDaus = 5;
$totalTirades = 0;

for ($i= 0; $i < $numeroDaus ; $i++){
    $dau = new PokerDice();
    $dau->throwDau();
    $totalTirades++;
    echo "Ha sortit " .$dau->shapeName() . " al dau " .($i+1). "\n"; 

}

echo "El nombre total de tirades entre tots els daus és de " .$totalTirades;

?>
