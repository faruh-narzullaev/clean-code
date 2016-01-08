<?php

namespace App;

abstract class AbstractDocument
{
    public function render()
    {
        $this->addPage($this->createPage());
    }

    private function addPage(PageInterface $page)
    {
        var_dump($page->printContent());
    }

	abstract public function createPage();
}
