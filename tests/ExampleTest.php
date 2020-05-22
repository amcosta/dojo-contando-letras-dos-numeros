<?php

namespace Tests;

use Dojo\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTrue()
    {
        $example = new Example();
        $this->assertTrue($example->exec());
    }
}