<?php

namespace Creational\Factory\Furniture;

use Creational\Factory\Furniture\Furnitures\Furniture;
use \Creational\Factory\Furniture\Furnitures\CoffeeTable;

class CoffeeTableFactory implements FurnitureFactory
{
    public function createFurniture(): Furniture
    {
        return new CoffeeTable();
    }
}