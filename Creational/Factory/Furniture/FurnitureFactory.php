<?php

namespace Creational\Factory\Furniture;

use Creational\Factory\Furniture\Furnitures\Furniture;

interface FurnitureFactory
{
    public function createFurniture() : Furniture;
}