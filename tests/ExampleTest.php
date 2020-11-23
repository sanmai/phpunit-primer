<?php

namespace Tests\PHPUnitPrimer;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
        $this->fail("This is a message for a faling test");
    }
}
