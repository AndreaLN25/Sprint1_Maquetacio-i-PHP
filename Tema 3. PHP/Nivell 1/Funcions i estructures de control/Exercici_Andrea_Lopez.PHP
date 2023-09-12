<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Exercici1-Programa una funció que, donat un número qualsevol (per exemple, la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.

    $edat = readline("Quina edat tens?");
    function parellImparell($edat){
        if ($edat%2 == 0){
            echo "Número parell";
        }else{
            echo "Número imparell";
        }
         
    }
    

    //Exercici2- Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.

    function amagatall(){
        for ($i = 0; $i < 10; $i += 2){
            echo $i;
        }
    }

    //Exercici3-Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.

    function amagatall2($final){
        $i = 0;
        while ($i <= $final){
            echo $i;
            $i += 2;
        }
    }

    //Exercici4-Per prevenir oblits establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.
   
    function amagatall3($final = 10){
        $i = 0;
        while ($i <= $final){
            echo $i;
            $i += 2;
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

    //Exercici6-
        /*Charlie em va mossegar el dit!
        Charlie et mossegarà el dit exactament el 50% del temps.
        Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

    function isBitten(){
        $mossegar = rand(1,2);
        if ($mossegar ==1) {
            $mossegat = "true";
        }else {
            $mossegat = "false";
        }
    }



    ?>
</body>
</html>