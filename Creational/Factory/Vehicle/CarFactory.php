<?php

namespace Creational\Factory\Vehicle;

use Creational\Factory\Vehicle\Vehicles\Car;
use Creational\Factory\Vehicle\Vehicles\Vehicle;
class CarFactory implements VehicleFactory
{
    public function createVehicle(): Vehicle
    {
        return new Car();
    }
}