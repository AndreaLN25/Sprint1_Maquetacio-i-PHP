<?php

class Pelicula{
    private $nom;
    private $duracio;
    private $director;

    public function __construct($nom, $duracio, $director){
        $this->nom = $nom;
        $this->duracio = $duracio;
        $this->director = $director;
    }
    public function getNombre(){
        return $this->nom;
    }
    public function getDuracio(){
        return $this->duracio;
    }
    public function getDirector(){
        return $this->director;
    }

}

?>