<?php
require_once 'vendor/autoload.php';

use Views\Pages;
use Auth\Auth;
$auth = new Auth();
$auth->signUp();
$auth->logIn();
$page = new Pages('auth');
