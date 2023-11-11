<?php
require_once 'vendor/autoload.php';
use Views\Pages;
$page = new Pages('news-feed','News Feed');
$page->checkIfUserAuth();
