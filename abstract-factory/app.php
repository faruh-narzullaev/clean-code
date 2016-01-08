<?php

require_once 'vendor/autoload.php';

use App\Factories\OReillyBookFactory;
use App\Factories\AbstractBookFactory;

$bookFactory = new OReillyBookFactory();

test($bookFactory);

function test(AbstractBookFactory $factory)
{
    $book1 = $factory->makePhpBook();

    var_dump($book1);

    $book2 = $factory->makeMySQLBook();

    var_dump($book2);
}

