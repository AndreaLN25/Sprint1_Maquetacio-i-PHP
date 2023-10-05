    <?php
//Exercici 1- 
/*Crea una classe Employee, defineix com a atributs el seu nom i sou.
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge
    si ha de pagar o no impostos (si el sou supera 6000, paga impostos).*/


class Employee {
    private $nom;
    private $sou;


    function initialize($nom,$sou) {
        $this->nom = $nom;
        $this->sou = $sou;

    }

    function __toString(){
        if ($this->sou > 6000){
            return " hola, $this->nom, Hauràs de pagar impostos";
        }else{
            return " hola, $this->nom, No pagaràs impostos";
        }
    }
}


$Empleat1 = new Employee;
$Empleat1 ->initialize("Andrea", 10000);
echo $Empleat1->__toString();


    ?>



