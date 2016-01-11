<?php

namespace App;

/**
 * Interface AssemblyLineInterface (This interface is our Abstract Factory player.)
 * @package App
 */
interface AssemblyLineInterface
{
    public function createCar();
    public function createTruck();
}