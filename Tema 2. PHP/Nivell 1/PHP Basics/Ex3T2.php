<?php

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


?>