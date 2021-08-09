<?php

use PHPUnit\Framework\TestCase;
require __DIR__."/../src/TriangleClassifier.php";

class TriangleClassifierTest extends TestCase
{
    public function test_equilateral_triangle()
    {
        $a = 2;
        $b = 2;
        $c = 2;
        $expected = true;
        $triangle = new TriangleClassifier();
        $result = $triangle->isTriangle($a, $b, $c);
        $this->assertTrue($expected);
    }

    public function test_isosceles_triangle()
    {
        $a = 2;
        $b = 2;
        $c = 3;
        $expected = true;
        $triangle = new TriangleClassifier();
        $result = $triangle->isTriangle($a, $b, $c);
        $this->assertTrue($expected);
    }

    public function test_normal_triangle()
    {
        $a = 3;
        $b = 4;
        $c = 5;
        $expected = true;
        $triangle = new TriangleClassifier();
        $result = $triangle->isTriangle($a, $b, $c);
        $this->assertTrue($expected);
    }

    public function test_not_triangle_turn_1()
    {
        $a = 8;
        $b = 2;
        $c = 3;
        $expected = false;
        $triangle = new TriangleClassifier();
        $result = $triangle->isTriangle($a, $b, $c);
        $this->assertFalse($expected);
    }

    public function test_not_triangle_turn_2()
    {
        $a = -1;
        $b = 2;
        $c = 1;
        $expected = false;
        $triangle = new TriangleClassifier();
        $result = $triangle->isTriangle($a, $b, $c);
        $this->assertFalse($expected);
    }

    public function test_not_triangle_turn_3()
    {
        $a = 0;
        $b = 1;
        $c = 1;
        $expected = false;
        $triangle = new TriangleClassifier();
        $result = $triangle->isTriangle($a, $b, $c);
        $this->assertFalse($expected);
    }
}
