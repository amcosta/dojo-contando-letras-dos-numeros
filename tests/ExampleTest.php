<?php

namespace Tests;

use Dojo\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testContando21Caracteres()
    {
        $example = new Example();
        $numero = 5;
        $this->assertEquals(21, $example->contarLetras($numero));
    }

    public function testContandoAsLetrasDe1A10()
    {
        $example = new Example();
        $numero = 10;
        $this->assertEquals(40, $example->contarLetras($numero));
    }

    public function testContandoAsLetrasDe1A13()
    {
        $example = new Example();
        $numero = 13;
        $this->assertEquals(53, $example->contarLetras($numero));
    }

    public function testContandoAsLetrasDe1A21()
    {
        $example = new Example();
        $numero = 21;
        $this->assertEquals(245, $example->contarLetras($numero));
    }
}