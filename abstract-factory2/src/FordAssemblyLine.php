<?php

namespace App;

/**
 * Class FordAssemblyLine (These are our Concrete Factories)
 * @package App
 */
class FordAssemblyLine implements AssemblyLineInterface
{
    public function createCar()
    {
        return new FordFiesta();
    }

    public function createTruck()
    {
        return new FordF250();
    }
}