<?php

require_once 'vendor/autoload.php';

use App\Building;
use App\FordAssemblyLine;

$building = new Building(new FordAssemblyLine());
$building->createTrucks();

$inventory = $building->getInventory();

dump($inventory);
