<?php

use PHPUnit\Framework\TestCase;
include "Ex5T2.php";

class Ex5T2Test extends TestCase {
    public function testNota(){
        $nota = new Ex5T2();

        $this->assertSame("Primera Divisió", $nota->grau(65));
        $this->assertSame("Segona Divisió", $nota->grau(45));
        $this->assertSame("Tercera Divisió", $nota->grau(35));
        $this->assertSame("L'estudiant reaprovarà", $nota->grau(25));
    }
}


?>
