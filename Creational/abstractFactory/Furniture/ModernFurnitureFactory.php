<?php

namespace Creational\abstractFactory\Furniture;

use Creational\abstractFactory\Furniture\Chair\ModernChair;
use Creational\abstractFactory\Furniture\Chair\Chair;
use Creational\abstractFactory\Furniture\CoffeeTable\ModernCoffeeTable;
use Creational\abstractFactory\Furniture\CoffeeTable\CoffeeTable;
use Creational\abstractFactory\Furniture\Sofa\ModernSofa;
use Creational\abstractFactory\Furniture\Sofa\Sofa;

class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new ModernCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}