<?php
//Exercici 1- Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.
//opcio1
$nombre = $nombresEnters(0,1,2,3,4);
foreach ($nombresEnters as $nombre) {
    echo $nombre;
}

//opcio2
$nombresEnters2 = [0,1,2,3,4];
var_dump ($nombresEnters2);



/*Exercici 2-Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.*/
$X = array (10, 20, 30, 40, 50,60);
//mida
echo count($X);
//eliminar element
unset($X[3]);
//reorganitar index
$Xsin40 = [];
foreach ($X as $nouArray){
    echo $nouArray; 
}
//mida despres d'eliminar un element
echo count ($Xsin40);






?>



