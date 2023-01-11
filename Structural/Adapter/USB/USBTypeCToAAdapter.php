<?php

namespace Structural\Adapter\USB;

use Structural\Adapter\USB\TypeC\USBTypeC;
use Structural\Adapter\USB\TypeA\USBTypeA;

class USBTypeCToAAdapter implements USBTypeA
{
    private USBTypeC $charger;

    public function __construct(USBTypeC $charger)
    {
        $this->charger = $charger;
    }

    public function chargeWithTypeA()
    {
        return "Charging using Adapter Type-A";
    }
}