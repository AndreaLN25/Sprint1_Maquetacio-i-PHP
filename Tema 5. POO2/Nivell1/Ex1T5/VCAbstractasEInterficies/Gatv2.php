<?php
/*Exercici 1
Necessitem crear un tipus de dades que representi un animal.
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
*/

include_once "Animalv2.php";

class Gatv2 extends Animalv2 implements Sound {
    public function makeSound() {
        return "Meoww!";
    }
}
?>
