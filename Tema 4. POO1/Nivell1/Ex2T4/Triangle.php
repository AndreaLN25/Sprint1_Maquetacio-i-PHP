<?php
//Exercici2-
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.

*/

include_once "Shape.php"; 

class Triangle extends Shape {
    public function area(){
        return (($this->amplada*$this->alçada)/2);
    }

}

?>
