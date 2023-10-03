<?php

//Exercici1-Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.
echo "\n Exercici 1 \n";
$dia = 6;
$preu = 123.45;
$nom = "Andrea";
$avui_plou = true;

echo "Integer: " .$dia. "\n";
echo "Double: " .$preu. "\n";
echo "String:" .$nom. "\n";
echo "Boolean: " .($avui_plou ? "true" : "false"). "\n";


//Exercici2
echo "\n Exercici 2 \n";
//Imprimeix per pantalla "Hello, World!" utilitzant una variable.
$salutacio = "Hello, World! \n"; 
echo $salutacio;
//Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
$SALUTACIO = strtoupper($salutacio);
echo $SALUTACIO; 
//Imprimeix per pantalla la mida (longitud) de la variable.
$longitud = strlen($salutacio);
echo "El missatge té " .$longitud ." caracters \n";
//Imprimeix per pantalla l'string en ordre invers de caràcters.
$salutacioInversa = strrev($salutacio);
echo "Escribim el missage al invers: " .$salutacioInversa;
//Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.
$informacio = "Aquest és el curs de PHP.\n";
echo $salutacio . $informacio; 

//Exercici3-
echo "\n Exercici 3 \n";

//a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
$X = 10;
$Y = 20;
echo "Valor d'X: " .$X. "\nValor d'Y: " .$Y. "\n";
echo "Suma: " .($X+$Y). "\n";
echo "Resta: " .($X-$Y). "\n";
echo "Producte: " .($X*$Y). "\n";
echo "Divisió: " .($X/$Y). "\n";
echo "Mòdul: " .($X%$Y). "\n";

$N = 25.5;
$M = 35.5;
echo "Valor d'N: " .$N. "\nValor d'M: " .$M. ".";
echo "Suma: " .($N+$M). "\n";
echo "Resta: " .($N-$M). "\n";
echo "Producte: " .($N*$M). "\n";
echo "Divisió: " .($N/$M). "\n";
echo "Mòdul: " .($N%$M). "\n";

echo "Doble d'X: " .($X*2). "\n";
echo "Doble d'Y: " .($Y*2). "\n";
echo "Doble d'N: " .($N*2). "\n";
echo "Doble d'M: " .($M*2). "\n";

echo "Suma total: " .($X+$Y+$N+$M). "\n";
echo "Producte total: " .($X*$Y*$N*$M). "\n";

//b)Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.


function Calculadora($Nombre1, $Nombre2, $operacio) {
    
    switch ($operacio) {
        case "suma":
            return $Nombre1 + $Nombre2;
        case "resta":
            return $Nombre1 - $Nombre2;
        case "multiplicacio":
            return $Nombre1 * $Nombre2;
        case "divisio":
            if ($Nombre2 != 0) {
                return $Nombre1 / $Nombre2;
            } else {
                return "Error: Division no valida.";
            }
        default:
            return "Operacio no valida";
    }
}


/*Exercici 4-Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas.*/
echo "\n Exercici 4 \n";


function comptar($interval, $final = 10){
    $i = 0;
    for($i; $i <= $final; $i += $interval){
        echo $i;
    }
}

comptar(2)."\n";

//Exercici5-Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
/*Condicions:
    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.*/
    echo "\n Exercici 5 \n";


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
    
    grau(43)."\n";
        
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