<?php
/*Exercici 1-Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/

define('DURACION_MINIMA', 3);
define('PREU_3_MIN',0.10);
define('PREU_MES_3_MIN',0.05);


function preuTrucada($duradaUsuari){
    /*$durada3Min = 3;
    $preuDuradaInf3min = 0.10;
    $preuDuradaSup3min = 0.05;*/
    if (DURACION_MINIMA > $duradaUsuari){    
        return PREU_3_MIN;
    }else {
        $trucadaSup3min = $duradaUsuari-DURACION_MINIMA;
        return (PREU_3_MIN + (PREU_MES_3_MIN*$trucadaSup3min));
    }
}
$duradaUsuari = 10;
$preu= preuTrucada($duradaUsuari);
echo "El preu de la teva trucada és de: $preu centims \n";

$duradaUsuari2 = 2;
$preu2 = preuTrucada($duradaUsuari2);
echo "El preu de la teva trucada és de: $preu2 centims ";

?>



