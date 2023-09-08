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
    
    ?>
</body>
</html>