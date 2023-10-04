<?php

//Exercici5-Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
/*Condicions:
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.*/
    echo "\n Exercici 5 \n";


    function grau($nota){
        if ($nota >= 60){
            return "Primera Divisió";
        }else if ( $nota >= 45 && $nota <= 59){
            return "Segona Divisió";
        }else if ( $nota >= 33 && $nota <= 44){
            return "Tercera Divisió";
        }else if ( $nota < 33){
            return "L'estudiant reaprovarà";
        }else{
            return "Ha hagut algun error";
        }
    }
    
    echo grau(43)."\n";
        

?>
