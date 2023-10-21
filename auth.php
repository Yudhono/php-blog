<?php require_once 'includes/header.php';?>
  <section class="signup" id="signup">
    <h1 class="signup__title">Sign Up</h1>
    <form method="POST" action="auth.php" class="signup-form">
      <label for="username" class="signup-form__label">Username:</label>
      <input type="text" name="username" id="username" class="signup-form__input" placeholder="Enter username">
      <label for="email" class="signup-form__label">Email:</label>
      <input type="email" name="email" id="email" class="signup-form__input" placeholder="Enter email">
      <label for="password" class="signup-form__label">Password:</label>
      <input type="password" name="password" id="password" class="signup-form__input" placeholder="Enter password">
      <input type="submit" name="signUp" id="signUp" class="signup-form__button" value="Sign Up">
    </form>
  </section>
  <section class="login" id="login">
    <h1 class="login__title">Log In</h1>
    <form method="POST" action="auth.php" class="login-form">
      <label for="username" class="login-form__label">Username:</label>
      <input type="text" name="username" id="username" class="login-form__input" placeholder="Enter username">
      <label for="email" class="login-form__label">Email:</label>
      <input type="email" name="email" id="email" class="login-form__input" placeholder="Enter email">
      <label for="password" class="login-form__label">Password:</label>
      <input type="password" name="password" id="password" class="login-form__input" placeholder="Enter password">
      <input type="submit" name="signUp" id="signUp" class="login-form__button" value="Sign Up">
    </form>
  </section>
<?php require_once 'includes/footer.php';?>
