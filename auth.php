<?php
require_once 'vendor/autoload.php';

use Views\Pages;
use Auth\Auth;

$page = new Pages('auth','Auth');
$auth = new Auth();

$auth->signUp();
$auth->logIn();
$page->userId();
