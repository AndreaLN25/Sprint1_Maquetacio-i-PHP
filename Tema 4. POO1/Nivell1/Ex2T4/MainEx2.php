<?php

//Exercici2-
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.

*/

include_once "Shape.php";
include_once "Rectangle.php";
include_once "Triangle.php";

$triangle1 = new Triangle(3,6);
echo "L'area del triangle es {$triangle1->area()}.\n";

$rectangle1 = new Rectangle(12,3);
#echo $rectangle1->area();
echo "L'area del rectangle es {$rectangle1->area()}.\n";



?>
