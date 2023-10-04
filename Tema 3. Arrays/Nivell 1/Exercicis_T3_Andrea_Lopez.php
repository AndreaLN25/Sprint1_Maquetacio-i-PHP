<?php
//Exercici 1- Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.
echo "\n Exercici 1: Opció 1 \n";

//opcio1
$nombre = array(0,1,2,3,4);
foreach ($nombre as $nombresEnters) {
    echo $nombresEnters,",";
}
echo "\n Exercici 1: Opció 2 \n";
//opcio2
$nombresEnters2 = [0,1,2,3,4];
var_dump ($nombresEnters2);


/*Exercici 2-Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.*/
echo "\n Exercici 2: \n";

$X = array(10, 20, 30, 40, 50, 60);

// print + mida abans d'eliminar l'element 
print_r($X);
echo "Mida abans d'eliminar l'element: " . count($X) . "\n";

//eliminar element i tornar a print
unset($X[2]);
print_r($X);
//reorganitzar índex-ctl-z

//mida després d'eliminar un element 
echo "Mida després d'eliminar un element: ".count($X)."\n";


/*Exercici 3-Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
Per exemple: Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/
echo "\n Exercici 3: \n";

function verificarCaracter($array,$character){
    foreach($array as $paraules){
    }
}








/*Exercici 4- Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
nom
edat
email
menjar favorit
*/
echo "\n Exercici 4: \n";


$Andrea = array("nom" =>"Andrea", "edat"=>"27", "email" => "andrea@gmail.com", "menjar favorit" => "arròs");

print_r($Andrea);





?>



