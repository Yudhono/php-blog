<?php
require_once 'vendor/autoload.php';

use Views\Pages;
use Settings\Settings;

$page = new Pages('settings','Settings');
$settings = new Settings();

$settings->setFullname();
