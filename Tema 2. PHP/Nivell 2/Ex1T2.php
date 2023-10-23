<?php
/*Exercici 1-Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/


function preuTrucada($duradaUsuari){
    $durada3Min = 3;
    $preuDuradaInf3min = 0.10;
    $preuDuradaSup3min = 0.05;
    if ($durada3Min > $duradaUsuari){    
        return $preuDuradaInf3min;
    }else {
        $trucadaSup3min = $duradaUsuari-$durada3Min;
        return ($preuDuradaInf3min + ($preuDuradaSup3min*$trucadaSup3min));
    }
}
$duradaUsuari = 10;
$preu= preuTrucada($duradaUsuari);
echo "El preu de la teva trucada és de: $preu centims \n";

$duradaUsuari2 = 2;
$preu2 = preuTrucada($duradaUsuari2);
echo "El preu de la teva trucada és de: $preu2 centims ";


?>


