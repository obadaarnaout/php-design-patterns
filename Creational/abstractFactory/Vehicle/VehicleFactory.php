<?php

namespace Creational\abstractFactory\Vehicle;

use Creational\abstractFactory\Vehicle\Bike\Bike;
use Creational\abstractFactory\Vehicle\Car\Car;

interface VehicleFactory
{
    public function createBike() : Bike;
    public function createCar() : Car;
}