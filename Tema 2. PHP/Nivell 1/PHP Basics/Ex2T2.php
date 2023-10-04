<?php

//Exercici2
echo "\n Exercici 2 \n";
//Imprimeix per pantalla "Hello, World!" utilitzant una variable.
$salutacio = "Hello, World! \n"; 
echo $salutacio;
//Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
$SALUTACIO = strtoupper($salutacio);
echo $SALUTACIO; 
//Imprimeix per pantalla la mida (longitud) de la variable.
$longitud = strlen($salutacio);
echo "El missatge té " .$longitud ." caracters \n";
//Imprimeix per pantalla l'string en ordre invers de caràcters.
$salutacioInversa = strrev($salutacio);
echo "Escribim el missage al invers: " .$salutacioInversa;
//Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.
$informacio = "Aquest és el curs de PHP.\n";
echo $salutacio . $informacio; 

?>