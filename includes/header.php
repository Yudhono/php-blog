<?php
session_name('PHPBlog');
session_start();

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
      <?php if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])):?>
      <li><a href="./index.php?uid=<?=$_SESSION['uid']?>" class="navigation-list__item">Home</a></li>
      <li><a href="./news-feed.php?uid=<?=$_SESSION['uid']?>" class="navigation-list__item">News Feed</a></li>
      <li><a href="./profile.php?uid=<?=$_SESSION['uid']?>" class="navigation-list__item" >Profile</a></li>
      <li><a href="./settings.php?uid=<?=$_SESSION['uid']?>" class="navigation-list__item" >Settings</a></li>
      <li><a href="./logout.php?uid=<?=$_SESSION['uid']?>" class="navigation-list__item">Logout</a></li>
      <?php endif;?>
      <?php if(!isset($_SESSION['uid']) && empty($_SESSION['uid'])):?>
        <li><a href="./index.php" class="navigation-list__item">Home</a></li>
        <li><a href="./auth.php#login" class="navigation-list__item" id="loginLink">Log In</a></li>
        <li><a href="./auth.php#signup" class="navigation-list__item" id="signupLink">Sign Up</a></li>
			<?php endif;?>
    </ul>
  </nav>
