<?php

namespace Creational\Builder\Cars;

use Creational\Builder\Cars\Car\Car;
use Creational\Builder\Cars\Car\Parts\Door;
use Creational\Builder\Cars\Car\Parts\Engine;
use Creational\Builder\Cars\Car\Parts\Wheel;

class CarBuilder
{
    private $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function addDoor($key)
    {
        $this->car->addParts($key,new Door());
    }

    public function addEngine($key)
    {
        $this->car->addParts($key,new Engine());
    }

    public function addWheel($key)
    {
        $this->car->addParts($key,new Wheel());
    }

    public function getCar(): Car
    {
        return $this->car;
    }
}