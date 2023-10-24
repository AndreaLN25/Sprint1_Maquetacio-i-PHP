<?php

//namespace Nivell1\Ex1T7;
//use Nivell1\test\NumberCheckerTest;


class NumberChecker {

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
?>

