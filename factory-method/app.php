<?php

require_once 'vendor/autoload.php';

use App\ResumeDocument;
//use App\PortfolioDocument;

$resumeDocument = new ResumeDocument();
$resumeDocument->render();

