<?php

namespace Creational\Factory\Furniture;

use Creational\Factory\Furniture\Furnitures\Furniture;
use Creational\Factory\Furniture\Furnitures\Sofa;

class SofaFactory implements FurnitureFactory
{
    public function createFurniture(): Furniture
    {
        return new Sofa();
    }
}