<?php
/*Exercici 2-Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).
A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
*/

$notesAlumnes = array(
    "Alumne1"=> [5,8,9,3,5],
    "Alumne2"=> [7,6,8,4,9],
    "Alumne3"=> [3,5,2,6,4],
    "Alumne4"=> [7,9,3,2,1]
);
/*
function calculMitjanes($notesAlumnes){
    $mitjanaClasse = 0;

    foreach ($notesAlumnes as $alumne => $notes){
        $mitjanaAlumne = array_sum($notes) / count($notes);
        $mitjanaClasse += $mitjanaAlumne;

        echo "Mitjana $alumne: $mitjanaAlumne \n";
    }

    $mitjanaClasse /= count($notesAlumnes);
    echo "Mitjana de la classe: $mitjanaClasse";
}

calculMitjanes($notesAlumnes);


function calculMitjanes($notesAlumnes){
    $totalAlumnes= count($notesAlumnes);
    $mitjanaClasse;

    foreach ($notesAlumnes as $alumne=> $notes){
        $mitjanaAlumne = array_sum($notes) / count($notes);
        $mitjanaClasse += $mitjanaAlumne;
        echo "Mitjana $alumne : $mitjanaAlumne \n";
    }
    $mitjanaClasse /= $totalAlumnes;
    echo "Mitjana de la classe: $mitjanaClasse";


}


calculMitjanes($notesAlumnes);
*/
function calculMitjanes($notesAlumnes) {
    $totalNotes = 0;
    $totalAlumnes = count($notesAlumnes); 

    foreach ($notesAlumnes as $notes) {
        $totalNotes += array_sum($notes);
    }

    $mitjanaClasse = $totalNotes / ($totalAlumnes * count($notes)); 

    foreach ($notesAlumnes as $alumne => $notes) {
        $mitjanaAlumne = array_sum($notes) / count($notes);
        echo "Mitjana $alumne: $mitjanaAlumne \n";
    }

    echo "Mitjana de la classe: $mitjanaClasse";
}
calculMitjanes($notesAlumnes);

?>
