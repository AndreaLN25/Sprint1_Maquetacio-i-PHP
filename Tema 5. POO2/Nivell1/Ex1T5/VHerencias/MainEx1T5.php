<?php
/*Exercici 1
Necessitem crear un tipus de dades que representi un animal.
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
*/

include "Animal.php";
include "Gos.php";
include "Gat.php";

$gos1 = new Gos ("BUP-BUPPP!!"); 
echo "el gos fa {$gos1->makesound()} \n";


$gat1 = new Gat ("MEOOWWW!!");
echo "el gat fa {$gat1->makesound()} \n"


?>
