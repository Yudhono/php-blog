<?php require_once 'includes/header.php';?>
  <section class="settings">
    <h1 class="settings__title">Settings page</h1>
    <p class="settings__description">Here you can change your settings in profile and change your account settings</p>
    <hr class="setting__line">
    <div class="settings-profile">
      <h2 class="settings-profile__title"> Change your profile information here</h2>
      <p class="settings-profile__description">Add profile picture, add more information about you.</p>
      <form method="POST" action="profile.php" class="settings-profile-form">
        <label for="fullname" class="settings-profile-form__label">Fullname:</label>
        <input type="text" name="fullname" id="fullname" class="settings-profile-form__input" placeholder="Enter fullname">
        <input type="submit" name="change" id="change" class="settings-profile-form__button" value="Save">
      </form>
      <form method="POST" action="profile.php" class="settings-profile-form">
        <input type="file" name="profile_pic" id="profilePic" class="settings-profile-form__input" placeholder="Choose profile picture">
        <input type="submit" name="add" id="add" class="settings-profile-form__button" value="Add">
      </form>
    </div>
    <div class="settings-account">
      <h2 class="settings-account__title"> Change your account settings here</h2>
      <p class="settings-account__description">Update your account setting as email,username or password here</p>
      <form method="POST" action="settings.php" class="settings-account-form">
        <label for="email" class="settings-account-form__label">Email:</label>
        <input type="email" name="email" id="email" class="settings-account-form__input" placeholder="Change your Email">
        <label for="username" class="settings-account-form__label">Username:</label>
        <input type="text" name="username" id="username" class="settings-account-form__input" placeholder="Change your username">
        <label for="password" class="settings-account-form__label">Password:</label>
        <input type="password" name="password" id="password" class="settings-account-form__input" placeholder="Change your password">
        <input type="submit" name="update" id="update" class="settings-account-form__button" value="Update">
      </form>
    </div>
  </section>
<?php require_once 'includes/footer.php';?>
