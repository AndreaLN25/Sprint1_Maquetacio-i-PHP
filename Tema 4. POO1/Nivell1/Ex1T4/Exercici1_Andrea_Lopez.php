<?php

//Exercici 1- 
/*Crea una classe Employee, defineix com a atributs el seu nom i sou.
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge-------------------
    si ha de pagar o no impostos (si el sou supera 6000, paga impostos).*/


    class Employee{
        protected $nom;
        protected $sou; 

        public function initialize($nom,$sou){
            $this->nom=$nom;
            $this->sou=$sou;
        }

        public function paguesImpostos(){
            if ($this->sou>6000){
                echo "Hola $this->nom pagaràs impostos";
            }else{
                echo "hola $this->nom no pagaràs impostos";
            }

        }

    }

    //main

    $empleat1= new Employee;
    $empleat1->initialize("pep", 1000);
    echo $empleat1->paguesImpostos();

?>

