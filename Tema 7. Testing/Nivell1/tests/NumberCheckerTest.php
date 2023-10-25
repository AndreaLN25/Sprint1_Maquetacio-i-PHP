<?php

use PHPUnit\Framework\TestCase;
include "NumberChecker.php";

class NumberCheckerTest extends TestCase{
    public function testIsEven(){
        $numpar = new NumberChecker(12);
        $this->assertTrue($numpar->isEven());
    }
    public function testIsOdd(){
        $numimpar = new NumberChecker(5);
        $this->assertFalse($numimpar->isEven());
    }

    public function testIsPositive(){
        $numpositiu = new NumberChecker(1);
        $this->assertTrue($numpositiu->isPositive());
    }
    public function testIsNegative(){
        $numnegatiu = new NumberChecker(-1);
        $this->assertFalse($numnegatiu->isPositive());
    }
    public function testIsZero(){
        $numzero = new NumberChecker(0);
        $this->assertFalse($numzero->isZero());
    }
}

?>