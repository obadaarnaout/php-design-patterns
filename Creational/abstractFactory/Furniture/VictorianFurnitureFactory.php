<?php

namespace Creational\abstractFactory\Furniture;

use Creational\abstractFactory\Furniture\Chair\VictorianChair;
use Creational\abstractFactory\Furniture\Chair\Chair;
use Creational\abstractFactory\Furniture\CoffeeTable\VictorianCoffeeTable;
use Creational\abstractFactory\Furniture\CoffeeTable\CoffeeTable;
use Creational\abstractFactory\Furniture\Sofa\VictorianSofa;
use Creational\abstractFactory\Furniture\Sofa\Sofa;

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new VictorianCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}