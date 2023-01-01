<?php

namespace Creational\abstractFactory\Vehicle;

use Creational\abstractFactory\Vehicle\Bike\Bike;
use Creational\abstractFactory\Vehicle\Bike\MountainBike;
use Creational\abstractFactory\Vehicle\Car\Car;
use Creational\abstractFactory\Vehicle\Car\SUVCar;

class MountainVehicleFactory implements VehicleFactory
{
    public function createCar(): Car
    {
        return new SUVCar();
    }

    public function createBike(): Bike
    {
        return new MountainBike();
    }
}