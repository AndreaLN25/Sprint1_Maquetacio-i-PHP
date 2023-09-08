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
    

    //- Exercici 2- Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.

    function amagatall(){
        for ($i = 0; $i < 10; $i += 2){
            echo $i;
        }
    }

    //Exercici3-Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.

    function amagatall2($final = 20){
        $i = 0;
        while ($i <= $final){
            echo $i;
            $i += 2;
        }
    }




    ?>
</body>
</html>