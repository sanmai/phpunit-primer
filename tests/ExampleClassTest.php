<?php

namespace PHPUnitPrimer;

class ExampleClassTest extends \PHPUnit_Framework_TestCase
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
     * @expectedException \PHPUnitPrimer\SpecificException
     */
    public function testInvalidResult($instance)
    {
        $instance->getResult();
    }
}
