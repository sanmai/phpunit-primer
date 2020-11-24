<?php

namespace PHPUnitPrimer;

class ExampleClass
{
    private $value;

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValueSquared()
    {
		throw new \RuntimeException("This is an error");

        return pow($this->value, 2);
    }

    public function getResult()
    {
        throw new SpecificException();
    }
}
