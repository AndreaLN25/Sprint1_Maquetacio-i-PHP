<?php

/*Exercici 3-Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
Per exemple: Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/
echo "\n Exercici 3: \n";

function conteCaracter($paraules,$caracter):bool{
    foreach($paraules as $paraula){
        if (strpos($paraula, $caracter) === false){
            return false;
        }
    }
    return true; 
}


$paraules = ["hola", "Php", "html"];
$caracter = "h";

if (conteCaracter($paraules, $caracter)) {
    echo "Totes les paraules contenen el caràcter '$caracter'.";
} else {
    echo "No totes les paraules contenen el caràcter '$caracter'.";
}


?>