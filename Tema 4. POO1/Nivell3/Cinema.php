<?php

class Cinema {
    private $nom;
    private $poblacio;
    private $llistatPelis = [];

    public function __construct($nom,$director,$llistatPelis){
        $this->nom = $nom;
        $this->poblacio = $director;
        $this->llistatPelis = $llistatPelis;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getPoblacio(){
        return $this->poblacio;
    }

    public function afegirPelis($pelicula){
        $this->llistatPelis[] = $pelicula;
    }

    public function mostrarDadesPelis(){
        foreach($this->llistatPelis as $pelicula){
            echo "Pelicula : " . $pelicula->getNombre() .  " Director : ". $pelicula->getDirector(). " Duracio : " . $pelicula->getDuracio().PHP_EOL;        
        }
    }

    public function peliMajorduracio(){
        $maxDuracio = 0;
        $peliMaxDuracio = "";
        foreach($this->llistatPelis as $pelicula){
            if($pelicula->getDuracio() > $maxDuracio){
                $maxDuracio = $pelicula->getDuracio();
                $peliMaxDuracio = $pelicula->getNombre();
            }
        }
        echo "Pelicula mes llarga : " . $peliMaxDuracio . " amb un total de " .$maxDuracio . " minuts. " . PHP_EOL;
    }

    public function buscarPelisPerDirector($director){
        foreach ($this->llistatPelis as $pelicula){
            if($pelicula->getDirector() == $director){
                echo "Pelicula: ". $pelicula->getNombre() . " y su director ". $pelicula->getDirector().PHP_EOL;
            }
        }
    }


}
?>