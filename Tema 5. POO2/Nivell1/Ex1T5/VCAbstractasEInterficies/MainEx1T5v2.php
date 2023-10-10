<?php

/*Exercici 1
Necessitem crear un tipus de dades que representi un animal.
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
*/

//include_once "Animalv2.php";
include "Gosv2.php";
include "Gatv2.php"; 
//include "Sound.php";

$gos1 = new Gosv2("Jack");
$gat1 = new Gatv2("Garfield");

//echo "El gos " . $gos1->getNom(). " fa " . $gos1->makeSound() ."\n"; 
//echo "El gat " .$gat1->getNom(). " fa " . $gat1->makeSound(); 

//echo "El gos $gos1->nom fa $gos1->makeSound()"; //preguntar error por la concatenacion
echo "El gos $gos1->nom fa " . $gos1->makeSound(); 


?>


