<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    //Exercici3-Crea una constant que contingui el teu nom i l'imprimeixi per pantalla. Has d'imprimir-la amb format de títol i lletra en negreta en HTML.
    define("NOM","Andrea", true);
    echo $nom; 
    echo "<h1><strong>" .NOM. "</strong></h1>";

    //Exercici4- Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.
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





    ?>

</body>
</html>