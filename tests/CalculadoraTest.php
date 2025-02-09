<?php

use PHPUnit\Framework\TestCase;
use App_docker\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $this->assertGreaterThan(2, $calc->suma(3, 2));
        $this->assertNotNull($calc->suma(3, 2));
        $this->assertEquals(5, $calc->suma(3, 2));
    }

    public function testResta()
    {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->resta(3, 2));
        $this->assertEquals(9, $calc->resta(15, 6));
        $this->assertEquals(3, $calc->resta(8, 5));
    }

    public function testMultiplicacion()
    {
        $calc = new Calculadora();
        $this->assertEquals(6, $calc->multiplicacion(3, 2));
        $this->assertEquals(24, $calc->multiplicacion(4, 6));
        $this->assertEquals(90, $calc->multiplicacion(9, 10));
    }

    public function testDivision()
    {
        $calc = new Calculadora();
        $this->assertEquals(4, $calc->division(8, 2));
        $this->assertEquals(2, $calc->division(6, 3));
        $this->assertEquals(5, $calc->division(10, 2));
    }

    public function testRaizCuadrada()
    {
        $calc = new Calculadora();
        $this->assertEquals(10, $calc->raizCuadrada(100));
        $this->assertEquals(2, $calc->raizCuadrada(4));
        $this->assertEquals(3, $calc->raizCuadrada(9));
    }
}
