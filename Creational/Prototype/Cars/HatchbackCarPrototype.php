<?php

namespace Creational\Prototype\Cars;

class HatchbackCarPrototype extends CarPrototype
{
    public $companyName;
    public $model;
    public $engineSize;
    public $numDoors;

    public function __construct($companyName,$model,$engineSize,$numDoors)
    {
        $this->companyName = $companyName;
        $this->model = $model;
        $this->engineSize = $engineSize;
        $this->numDoors = $numDoors;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}