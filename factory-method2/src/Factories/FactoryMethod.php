<?php

namespace App\Factories;

use App\Contracts\VehicleInterface;

abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST  = 2;

    /**
     * The children of the class must implement this method.
     *
     * Sometimes this method can be public to get "raw" object
     *
     * @param string $type a generic type
     *
     * @return VehicleInterface a new vehicle
     */
    abstract protected function createVehicle($type);

    /**
     * Creates a new vehicle.
     *
     * @param int $type
     *
     * @return VehicleInterface a new vehicle
     */
    public function create($type)
    {
        $instance = $this->createVehicle($type);
        $instance->setColor('#f00');

        return $instance;
    }
}
