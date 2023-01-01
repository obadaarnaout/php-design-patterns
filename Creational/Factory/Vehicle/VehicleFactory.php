<?php
namespace Creational\Factory\Vehicle;

use Creational\Factory\Vehicle\Vehicles\Vehicle;

interface VehicleFactory
{
    public function createVehicle() : Vehicle;
}