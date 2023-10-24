<?php

use PHPUnit\Framework\TestCase;
include "NumberChecker.php";

class NumberCheckerTest extends TestCase{
    public function testIsEven(){
        $numpar = new NumberChecker(12);
        $this->assertTrue($numpar->isEven());

        $numimpar = new NumberChecker(5);
        $this->assertFalse($numimpar->isEven());
    }

    public function testIsPositive(){
        $numpositiu = new NumberChecker(1);
        $this->assertTrue($numpositiu->isPositive());
        
        $numnegatiu = new NumberChecker(-1);
        $this->assertFalse($numnegatiu->isPositive());
    }
}

?>