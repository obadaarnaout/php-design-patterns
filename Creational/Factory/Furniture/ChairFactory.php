<?php

namespace Creational\Factory\Furniture;

use Creational\Factory\Furniture\Furnitures\Chair;
use Creational\Factory\Furniture\Furnitures\Furniture;

class ChairFactory implements FurnitureFactory
{
    public function createFurniture(): Furniture
    {
        return new Chair();
    }
}