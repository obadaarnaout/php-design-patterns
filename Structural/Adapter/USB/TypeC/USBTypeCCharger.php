<?php

namespace Structural\Adapter\USB\TypeC;
use Structural\Adapter\USB\TypeC\USBTypeC;

class USBTypeCCharger implements USBTypeC
{

    public function chargeWithTypeC(): string
    {
        return "Charging using Adapter Type-C";
    }
}