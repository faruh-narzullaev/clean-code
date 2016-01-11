<?php

namespace App;

/**
 * Class ChevyAssemblyLine (These are our Concrete Factories)
 * @package App
 */
class ChevyAssemblyLine implements AssemblyLineInterface
{
    public function createCar()
    {
        return new ChevyMalibu();
    }

    public function createTruck()
    {
        return new ChevySilverado();
    }
}