<?php

namespace App;

use App\Contracts\VehicleInterface;

/** Ferrari is a italian car. */
class Ferrari implements VehicleInterface
{
    /** @var string */
    protected $color;

    /** @param string $rgb */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}
