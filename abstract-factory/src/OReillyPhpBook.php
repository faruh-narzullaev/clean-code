<?php

namespace App;


class OReillyPhpBook
{
    private $author;

    private $title;

    public function __construct()
    {
        $random = rand();

        $this->author = 'PHP Author: '.$random;
        $this->title  = 'PHP Title: '.$random;
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