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

//Exercici3-
//a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
$X = 10;
$Y = 20;
echo "Valor d'X: " .$X. ". Valor d'Y: " .$Y. ".";
echo "Suma: " .($X+$Y);
echo "Resta: " .($X-$Y);
echo "Producte: " .($X*$Y);
echo "Divisió: " .($X/$Y);
echo "Mòdul: " .($X%$Y);

$N = 25.5;
$M = 35.5;
echo "Valor d'N: " .$N. ". Valor d'M: " .$M. ".";
echo "Suma: " .($N+$M);
echo "Resta: " .($N-$M);
echo "Producte: " .($N*$M);
echo "Divisió: " .($N/$M);
echo "Mòdul: " .($N%$M);

echo "Doble d'X: " .($X*2);
echo "Doble d'Y: " .($Y*2);
echo "Doble d'N: " .($N*2);
echo "Doble d'M: " .($M*2);

echo "Suma total: " .($X+$Y+$N+$M);
echo "Producte total: " .($X*$Y*$N*$M);

//b)Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.
function Calculadora ($Nombre1, $Nombre2, $operacio){
$Nombre1 = readline ("Digues el primer nombre:");
$Nombre2 = readline ("Digues el segon nombre:");
$operacio = readline ("Indica l'operació a realitzar:");

    switch ($operacio){
        case "suma":
            return $Nombre1+$Nombre1;
        case "resta":
            return $Nombre1-$Nombre2;
        case "multiplicacio":
            return $Nombre1*$Nombre1;
        case "divisio":
            return $Nombre1/$Nombre2;
        default: 
            echo "operacio no valida";
    }
}


/*Exercici 4-Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas.*/

function comptar($final = 10,$interval){
    
    for ($i = 1; $i <= $final; $i += $interval){
        echo $i;
    }
}


//Exercici5-Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
/*Condicions:
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.*/

    function grau($nota){
        if ($nota >= 60){
            echo "Primera Divisió";
        }else if ( $nota >= 45 && $nota <= 59){
            echo "Segona Divisió";
        }else if ( $nota >= 33 && $nota <= 44){
            echo "Tercera Divisió";
        }else if ( $nota <= 33){
            echo "L'estudiant reaprovarà";
        }else{
            echo "Ha hagut algun error";
        }
    }



?>