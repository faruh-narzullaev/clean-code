<?php

namespace App;

class OReillyMySQLBook
{
    private $author;

    private $title;

    public function __construct()
    {
        $random = rand();

        $this->author = 'MYSQL Author: '.$random;
        $this->title  = 'MYSQL Title: '.$random;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}