<?php

namespace Tests\PHPUnitPrimer;

use PHPUnit\Framework\TestCase;
use PHPUnitPrimer\ExampleClass;

class ExampleClassTest extends TestCase
{
    public function testValueSquared()
    {
        $instance = new ExampleClass();
        $instance->setValue(42);
        $this->assertEquals(1764, $instance->getValueSquared());

        return $instance;
    }

    /**
     * @depends testValueSquared
     */
    public function testInvalidResult($instance)
    {
        $this->expectException(\PHPUnitPrimer\SpecificException::class);
        $instance->getResult();
    }
}
