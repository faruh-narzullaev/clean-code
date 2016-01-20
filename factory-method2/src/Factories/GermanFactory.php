<?php

namespace App\Factories;

use App\Bicycle;
use App\Porsche;

/** GermanFactory is a vehicle factory in Germany. */
class GermanFactory extends FactoryMethod
{
    /** {@inheritdoc} */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                $instance = new Porsche();

                // we can specialize the way we want some concrete Vehicle since
                // we know the class
                $instance->addTuningAMG();

                return $instance;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle.");
        }
    }
}
