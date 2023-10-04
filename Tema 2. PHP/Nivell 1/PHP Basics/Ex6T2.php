<?php

//Exercici6-
    /*Charlie em va mossegar el dit!
    Charlie et mossegarà el dit exactament el 50% del temps.
    Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/
    echo "\n Exercici 6 \n";

    function isBitten(){
        $mossegar = rand(1,2);
        if ($mossegar ===1) {
            echo "Charlie m'ha mossegat el dit";
        }else {
            echo "Charlie no m'ha mossegat";
            }
    }
    
    isBitten(1);


?>