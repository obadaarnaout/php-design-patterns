<?php
namespace Creational\Factory\Vehicle;

use Creational\Factory\Vehicle\Vehicles\Bike;
use Creational\Factory\Vehicle\Vehicles\Vehicle;

class BikeFactory implements VehicleFactory
{
    public function createVehicle(): Vehicle
    {
        return new Bike();
    }
}