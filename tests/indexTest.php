<?php

use \PHPUnit\Framework\TestCase;

// Import the class to be tested
require_once __DIR__ . '/../src/index.php';

class indexTest extends TestCase
{
    public function testSumar()
    {
        // Preparación
        $calculadora = new Calculadora();

        // Ejecución
        $resultado = $calculadora->sumar(2, 2);

        // Comprobación
        $this->assertEquals(4, $resultado);
    }

    public function testRestar()
    {
        // Preparación
        $calculadora = new Calculadora();

        // Ejecución
        $resultado = $calculadora->restar(2, 2);

        // Comprobación
        $this->assertEquals(0, $resultado);
    }

    public function testMultiplicar()
    {
        // Preparación
        $calculadora = new Calculadora();

        // Ejecución
        $resultado = $calculadora->multiplicar(2, 2);

        // Comprobación
        $this->assertEquals(4, $resultado);
    }

    public function testDividir()
    {
        // Preparación
        $calculadora = new Calculadora();

        // Ejecución
        $resultado = $calculadora->dividir(2, 2);

        // Comprobación
        $this->assertEquals(1, $resultado);
    }
}
