<?php

use PHPUnit\Framework\TestCase;
use penkin\LinearEquationSolver;
use penkin\PenkinException;

class LinearEquationSolverTest extends TestCase {
    public function testSolveLinearEquation() {
        $result = new LinearEquationSolver();

        $this->assertEquals([-3], $result->solveLinearEquation(5, 15));
        $this->assertEquals([17], $result->solveLinearEquation(10, -170));

        // a = 0
        $this->expectException(PenkinException::class);
        $result->solveLinearEquation(0, 2);
    }
}