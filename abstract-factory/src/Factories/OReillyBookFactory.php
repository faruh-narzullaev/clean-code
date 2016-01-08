<?php

namespace App\Factories;

use App\OReillyPhpBook;
use App\OReillyMySQLBook;

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = 'O\'Reilly';

    function makePhpBook()
    {
        return new OReillyPhpBook();
    }

    function makeMySQLBook()
    {
        return new OReillyMySQLBook();
    }
}