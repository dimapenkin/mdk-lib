<?php

use PHPUnit\Framework\TestCase;
use penkin\QuadEquationSolver;
use penkin\PenkinException;

class QuadEquationSolverTest extends TestCase {
    public function testSolve() {
        $result = new QuadEquationSolver();

        $this->assertEquals([7, 3], $result->solve(1, -10, 21));
        $this->assertEquals([1, -3], $result->solve(1, 2, -3));

        // a = 0
        $this->assertEquals([3], $result->solve(0, 5, -15));

        // one solution
        $this->assertEquals([-3], $result->solve(1, 6, 9));

        // no solution
        $this->expectException(PenkinException::class);
        $result->solve(1, 2, 17);
    }
}