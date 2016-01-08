<?php

namespace App;

class ResumeDocument extends AbstractDocument
{
    public function createPage()
    {
        return new ResumePage;
    }
}
