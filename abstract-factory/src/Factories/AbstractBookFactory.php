<?php

namespace App\Factories;

abstract class AbstractBookFactory
{
    abstract function makePhpBook();
    abstract function makeMySQLBook();
}