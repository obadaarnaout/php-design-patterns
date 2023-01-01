<?php

namespace Creational\abstractFactory\Vehicle;

use Creational\abstractFactory\Vehicle\Bike\Bike;
use Creational\abstractFactory\Vehicle\Bike\RoadBike;
use Creational\abstractFactory\Vehicle\Car\Car;
use Creational\abstractFactory\Vehicle\Car\SedanCar;

class RoadVehicleFactory implements VehicleFactory
{
    public function createCar(): Car
    {
        return new SedanCar();
    }

    public function createBike(): Bike
    {
        return new RoadBike();
    }
}