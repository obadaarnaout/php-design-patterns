<?php

namespace Creational\abstractFactory\Furniture;

use Creational\abstractFactory\Furniture\Chair\Chair;
use Creational\abstractFactory\Furniture\CoffeeTable\CoffeeTable;
use Creational\abstractFactory\Furniture\Sofa\Sofa;

interface FurnitureFactory
{
    public function createChair() :Chair;
    public function createCoffeeTable() :CoffeeTable;
    public function createSofa() :Sofa;
}