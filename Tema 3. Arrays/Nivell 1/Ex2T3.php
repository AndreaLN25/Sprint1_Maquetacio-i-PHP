<?php

/*Exercici 2-Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.*/
echo "\n Exercici 2: \n";

$X = array(10, 20, 30, 40, 50, 60);

// print + mida abans d'eliminar l'element 
print_r($X);
echo "Mida abans d'eliminar l'element: " . count($X) . "\n";

//eliminar element i tornar a print
unset($X[2]);
print_r($X);
//reorganitzar índex i tornar a print
$X = array_values($X);
print_r($X);

//mida després d'eliminar un element 
echo "Mida després d'eliminar un element: ".count($X)."\n";


?>