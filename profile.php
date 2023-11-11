<?php
require_once 'vendor/autoload.php';
use Views\Pages;
$page = new Pages('profile','Profile');
$page->checkIfUserAuth();
