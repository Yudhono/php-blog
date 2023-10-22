<?php require_once 'includes/header.php';?>
  <section class="profile" id="profile">
    <h1 class="profile__title">Welcome Fullname</h1>
    <div class="profile-statistics">
      <img src="public/images/profile.png" alt="Profile picture" class=profile-statistics__profile-pic>
      <p class="profile-statistics__count">Posts published:30</p>
      <p class="profile-statistics__count">Comments adding:30</p>
      <p class="profile-statistics__count">Files uploaded:30</p>
      <p class="profile-statistics__count">Last log time:30</p>
    </div>
    <hr class="profile__line">
    <div class="posts-scrolling">
      <article class="user-post">
        <header class="post-heading">
          <h1 class="post-heading__title">Post title</h1>
          <p class="post-heading__author">Alexander Lamdan</p>
          <p class="post-heading__time">Created at: 12:06 pm, 23 October, 2023</p>
        </header>
        <section class="post-body">
          <p class="post-body__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Vulputate dignissim suspendisse in est ante in nibh mauris cursus. Diam sit amet nisl suscipit. Rhoncus est pellentesque elit ullamcorper dignissim. Nulla facilisi nullam vehicula ipsum a arcu cursus. Nulla facilisi morbi tempus iaculis urna id volutpat. Volutpat diam ut venenatis tellus in metus vulputate eu. Imperdiet massa tincidunt nunc pulvinar sapien et. Pulvinar mattis nunc sed blandit libero volutpat sed. Nulla pellentesque dignissim enim sit amet venenatis. Mi sit amet mauris commodo quis imperdiet massa tincidunt.
          </p>
        </section>
        <a id="commentsIcon"><i class="fa-regular fa-comments"></i></a>
        <section class="comment-section">
          <div class="comments-scrolling">
            <div class="comments-block">
              <p class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t   empor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin.
              </p>
            </div>
          </div>
        </section>
      </article>
    </div>
  </section>
<?php require_once 'includes/footer.php';?>
