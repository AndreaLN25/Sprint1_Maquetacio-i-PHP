<?php

/*Exercici 2-Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.*/
echo "\n Exercici 2: \n";

$X = array(10, 20, 30, 40, 50, 60);

//mida abans d'eliminar l'element
echo "Mida abans d'eliminar l'element: " . count($X) . "\n";
//eliminar element
unset($X[3]);
//reorganitzar índex
$X = array_values($X);
//mida després d'eliminar un element i reorganitzar índexs
echo "Mida després d'eliminar un element i reorganitzar índexs: " . count($X) . "\n";
//mostrar l'array després d'eliminar i reorganitzar índexs
echo "Array després d'eliminar un element i reorganitzar índexs: ";
foreach ($X as $nouArray) {
    echo $nouArray . ",";
}

?>