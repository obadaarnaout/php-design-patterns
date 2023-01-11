<?php

namespace Structural\Adapter\USB\TypeA;

class USBTypeACharger implements USBTypeA
{

    public function chargeWithTypeA(): string
    {
        return "Charging using Adapter Type-A";
    }
}