<?php

namespace Creational\Prototype\Cars;

class SportsCarPrototype extends CarPrototype
{
    public $companyName;
    public $model;
    public $engineSize;

    public function __construct($companyName,$model,$engineSize)
    {
        $this->companyName = $companyName;
        $this->model = $model;
        $this->engineSize = $engineSize;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}