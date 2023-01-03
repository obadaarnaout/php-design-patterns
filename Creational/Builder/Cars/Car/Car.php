<?php

namespace Creational\Builder\Cars\Car;

class Car
{
    private $parts = [];

    public function addParts($key,$value)
    {
        $this->parts[$key] = $value;
    }

    public function getParts(): array
    {
        return $this->parts;
    }
}