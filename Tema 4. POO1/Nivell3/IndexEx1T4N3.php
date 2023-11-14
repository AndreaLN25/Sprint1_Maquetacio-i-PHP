
<?php

require "Cinema.php";
require "Pelicula.php";

/* Exercici 1
Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. 
Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. 
Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.

*/

$cine1 = new Cinema("CineExemple", "Barcelona", []);

$peli1 = new Pelicula("PeliExemple1", 60, "Andrea Lopez");
$peli2 = new Pelicula("PeliExemple2", 120, "Ana Lopez");
$peli3 = new Pelicula("PeliExemple3", 135, "Alexandra Lopez");


$cine1->afegirPelis($peli1);
$cine1->afegirPelis($peli2);
$cine1->afegirPelis($peli3);

$cine1->mostrarDadesPelis();
$cine1->peliMajorduracio();
$cine1->buscarPelisPerDirector("Ana Lopez");



?>