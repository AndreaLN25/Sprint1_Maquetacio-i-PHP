<?php

//Exercici1-Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.
//Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.

echo "\n Exercici 1 \n";

$dia = 6;
$preu = 123.45;
$nom = "Andrea";
$avui_plou = true;
define("NOM", "Andrea");
echo "Integer: " .$dia. "\n";
echo "Double: " .$preu. "\n";
echo "String:" .$nom. "\n";
echo "Boolean: " .($avui_plou ? "true" : "false"). "\n";
echo NOM;

?>