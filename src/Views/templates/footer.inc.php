    <footer class="footer" id="footer">
      <ul class="list-nav-links">
      <?php if(isset($_GET['uid']) && !empty($_GET['uid'])):?>
        <li><a href="./index.php?uid=<?=$_GET['uid']?>" class="list-nav-links__item">Home</a></li>
			  <li><a href="./news-feed.php?uid=<?=$_GET['uid']?>" class="list-nav-links__item">News Feed</a></li>
        <li><a href="./profile.php?uid=<?=$_GET['uid']?>" class="list-nav-links__item">Profile</a></li>
        <li><a href="./settings.php?uid=<?=$_GET['uid']?>" class="list-nav-links__item">Settings</a></li>
        <li><a href="./logout.php?uid=<?=$_GET['uid']?>" class="list-nav-links__item">Logout</a></li>
			<?php endif;?>
      <?php if(!isset($_GET['uid']) && empty($_GET['uid'])):?>
        <li><a href="./index.php" class="list-nav-links__item">Home</a></li>
        <li><a href="./auth.php#login" class="list-nav-links__item" id="loginLink">Log In</a></li>
        <li><a href="./auth.php#signup" class="list-nav-links__item" id="signupLink">Sign Up</a></li>
      <?php endif;?>
      </ul>
      <ul class="list-links">
        <li><a href="./LICENSE" class="list-links__item">License</a></li>
        <li><a href="./privacy-policy.html" class="list-links__item">Privacy Policy</a></li>
        <li><a href="./user-agreement" class="list-links__item">User Agreement</a></li>
        <li><a href="./readme" class="list-links__item">ReadMe</a></li>
      </ul>
      <p class="footer__author">All Rights Reserved to Alexander Lamdan &copy; <?=date("Y")?></p>
    </footer>
  </body>
  <script src="public/java_script/jquery-3.7.1.min.js"></script>
  <script src="public/java_script/all.min.js"></script>
  <script src="public/java_script/main.js"></script>
</html>
