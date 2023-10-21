<?php

require_once 'kernel/kernel.php';

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Blog</title>
    <link href="public/css/all.min.css" rel="stylesheet">
    <link href="public/css/normalize.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navigation" id="navigation">
    <ul class="navigation-list">
      <li><a href="./index.php" class="navigation-list__item">Home</a></li>
      <li><a href="./news-feed.php" class="navigation-list__item">News Feed</a></li>
      <li><a href="./auth.php" class="navigation-list__item">Log In</a></li>
      <li><a href="./auth.php" class="navigation-list__item">Sign Up</a></li>
    </ul>
  </nav>
