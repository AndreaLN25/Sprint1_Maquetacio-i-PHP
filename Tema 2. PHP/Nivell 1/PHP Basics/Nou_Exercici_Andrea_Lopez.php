<?php

//Exercici1-Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.
$dia = 6;
$preu = 123.45;
$nom = "Andrea";
$avui_plou = true;

echo "Integer: " .$dia;
echo "Double: " .$preu;
echo "String:" .$nom;
echo "Boolean: " ($avui_plou ? "true" : "false");

//Exercici2
//Imprimeix per pantalla "Hello, World!" utilitzant una variable.
$salutacio = "Hello, World!"; 
echo $salutacio;
//Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
$SALUTACIO = strtoupper($salutacio);
echo $SALUTACIO; 
//Imprimeix per pantalla la mida (longitud) de la variable.
$longitud = strlen($salutacio);
echo "El missatge té " .$longitud ."caracters";
//Imprimeix per pantalla l'string en ordre invers de caràcters.
$salutacioInversa = strrev($salutacio);
echo "Escribim el missage al invers: " .$salutacioInversa;
//Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.
$informacio = "Aquest és el curs de PHP";
echo $salutacio . $informacio; 

