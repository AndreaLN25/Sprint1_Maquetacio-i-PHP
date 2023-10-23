<?php
/*Exercici 1-Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:
    La intersecció dels dos arrays (nombres en comú)
    La mescla dels dos arrays.
*/

$nombres1 = [1,3,6,4.5,2.5,0];
$nombres2 = [1,6,4.5,9,2,0];


$interseccio = var_dump(array_intersect($nombres1,$nombres2));
echo "Els elements comuns de les dues arrays són: $interseccio";


//mescla
print_r(array_merge($nombres1,$nombres2));


?>
