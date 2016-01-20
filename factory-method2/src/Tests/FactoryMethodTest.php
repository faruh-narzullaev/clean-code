<?php

namespace App\Tests;

use App\Factories\FactoryMethod;
use App\Factories\GermanFactory;
use App\Factories\ItalianFactory;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    protected $type = [
        FactoryMethod::CHEAP,
        FactoryMethod::FAST
    ];

    public function getShop()
    {
        return [
            [new GermanFactory()],
            [new ItalianFactory()]
        ];
    }

    /**
     * @param FactoryMethod $shop
     *
     * @dataProvider getShop
     */
    public function testCreation(FactoryMethod $shop)
    {
        // This test method acts as a client for the factory.
        // We don't care about the factory, all we know is it can produce vehicle.
        foreach ($this->type as $oneType) {
            $vehicle = $shop->create($oneType);
            $this->assertInstanceOf('App\Contracts\VehicleInterface', $vehicle);
        }
    }

    /**
     * @param FactoryMethod $shop
     *
     * @dataProvider getShop
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType(FactoryMethod $shop)
    {
        $shop->create('spaceship');
    }
}
