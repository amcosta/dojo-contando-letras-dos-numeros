<?php

namespace Tests;

use Dojo\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testContando21Caracteres()
    {
        $example = new Example();
        $numeros = [1, 2, 3, 4, 5];
        $this->assertEquals(21, $example->contarLetras($numeros));
    }

    public function testContandoAsLetrasDe1A10()
    {
        $example = new Example();
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $this->assertEquals(25, $example->contarLetras($numeros));
    }
}