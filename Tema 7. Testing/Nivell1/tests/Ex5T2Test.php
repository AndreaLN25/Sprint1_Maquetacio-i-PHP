<?php

use PHPUnit\Framework\TestCase;
include "Ex5T2.php";

class Ex5T2Test extends TestCase {
    /*public function testNota(){
        $nota = new Ex5T2();

        $this->assertSame("Primera Divisió", $nota->grau(65));
        $this->assertSame("Segona Divisió", $nota->grau(45));
        $this->assertSame("Tercera Divisió", $nota->grau(35));
        $this->assertSame("L'estudiant reaprovarà", $nota->grau(25));
        */

    public function testGraumajor60(){  
        $nota60 = new Ex5T2();
        $this->assertEquals("Primera Divisió", $nota60->grau(65));
    }
    public function testGraumajor45(){
        $nota45 = new Ex5T2();
        $this->assertEquals("Segona Divisió", $nota45->grau(45));
    }
    public function testGraumajor33(){
        $nota45 = new Ex5T2();
        $this->assertEquals("Tercera Divisió", $nota45->grau(33));
    } 
    public function testGraumenor33(){
        $nota45 = new Ex5T2();
        $this->assertEquals("L'estudiant reaprovarà", $nota45->grau(30));
    }     

}

?>
