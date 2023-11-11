<?php
require_once 'vendor/autoload.php';
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="public/css/all.min.css" rel="stylesheet">
    <link href="public/css/normalize.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navigation" id="navigation">
    <ul class="navigation-list">
      <?php if(isset($_GET['uid']) && !empty($_GET['uid'])):?>
			<li><a href="./index.php?uid=<?=$_GET['uid']?>" class="navigation-list__item">Home</a></li>
      <li><a href="./news-feed.php?uid=<?=$_GET['uid']?>" class="navigation-list__item">News Feed</a></li>
      <li><a href="./profile.php?uid=<?=$_GET['uid']?>" class="navigation-list__item" >Profile</a></li>
      <li><a href="./settings.php?uid=<?=$_GET['uid']?>" class="navigation-list__item" >Settings</a></li>
      <li><a href="./logout.php?uid=<?=$_GET['uid']?>" class="navigation-list__item">Logout</a></li>
			<?php endif;?>
      <?php if(!isset($_GET['uid']) && empty($_GET['uid'])):?>
        <li><a href="./index.php" class="navigation-list__item">Home</a></li>
        <li><a href="./auth.php#login" class="navigation-list__item" id="loginLink">Log In</a></li>
			  <li><a href="./auth.php" class="navigation-list__item" id="signupLink">Sign Up</a></li>
      <?php endif;?>
    </ul>
  </nav>
