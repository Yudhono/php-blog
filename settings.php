<?php
require_once 'vendor/autoload.php';
use Views\Pages;
$page = new Pages('settings','Settings');
$page->checkIfUserAuth();
