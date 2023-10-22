<?php require_once 'includes/header.php';?>
  <section class="profile" id="profile">
    <h1 class="profile__title">Welcome Fullname</h1>
    <div class="profile-statistics">
      <img src="public/images/profile.png" alt="Profile picture" class="profile-statistics__profile-pic">
      <p class="profile-statistics__count">Posts published:30</p>
      <p class="profile-statistics__count">Comments adding:30</p>
      <p class="profile-statistics__count">Files uploaded:30</p>
      <p class="profile-statistics__count">Last log time:30</p>
    </div>
    <hr class="profile__line">
    <div class="profile-form-block">
      <form method="POST" action="news-feed.php" class="profile-form">
        <textarea class="profile-form__input" id="textarea" name="textarea" type="text" placeholder="Write your post here" cols=45 rows=15></textarea>
        <input type="submit" name="addPost" id="addPost" value="Add Post" class="profile-form__button">
      </form>
    </div>
    <div class="posts-scrolling">
       <article class="user-post">
        <header class="post-heading">
          <h1 class="post-heading__title">Post title</h1>
          <div class="post-heading-information">
            <img src="public/images/profile.png" alt="User profile picture in the post" class="post-heading-information__profile-pic">
            <p class="post-heading__author">Alexander Lamdan</p>
            <p class="post-heading__time">Created at: 12:06 pm, 23 October, 2023</p>
          </div>
        </header>
        <section class="post-body">
          <p class="post-body__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Vulputate dignissim suspendisse in est ante in nibh mauris cursus. Diam sit amet nisl suscipit. Rhoncus est pellentesque elit ullamcorper dignissim. Nulla facilisi nullam vehicula ipsum a arcu cursus. Nulla facilisi morbi tempus iaculis urna id volutpat. Volutpat diam ut venenatis tellus in metus vulputate eu. Imperdiet massa tincidunt nunc pulvinar sapien et. Pulvinar mattis nunc sed blandit libero volutpat sed. Nulla pellentesque dignissim enim sit amet venenatis. Mi sit amet mauris commodo quis imperdiet massa tincidunt.
          </p>
        </section>
        <a id="commentsIcon"><i class="fa-regular fa-comments"></i></a>
        <section class="comment-section">
          <p class="comment-section__title">Comments:</p>
          <div class="comments-scrolling">
            <div class="comments-block">
              <p class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t   empor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin.
              </p>
              <div class="comments-author">
                <img src="public/images/profile.png" alt="User profile picture in the post" class="comments-author__profile-pic">
                <p class="comments-author__author">Alexander Lamdan</p>
                <p class="comments-author__time">Created at: 12:06 pm, 23 October, 2023</p>
              </div>
            </div>
             <div class="comments-block">
              <p class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t   empor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin.
              </p>
              <div class="comments-author">
                <img src="public/images/profile.png" alt="User profile picture in the post" class="comments-author__profile-pic">
                <p class="comments-author__author">Alexander Lamdan</p>
                <p class="comments-author__time">Created at: 12:06 pm, 23 October, 2023</p>
              </div>
            </div>
             <div class="comments-block">
              <p class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t   empor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin.
              </p>
              <div class="comments-author">
                <img src="public/images/profile.png" alt="User profile picture in the post" class="comments-author__profile-pic">
                <p class="comments-author__author">Alexander Lamdan</p>
                <p class="comments-author__time">Created at: 12:06 pm, 23 October, 2023</p>
              </div>
            </div>
             <div class="comments-block">
              <p class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t   empor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin.
              </p>
              <div class="comments-author">
                <img src="public/images/profile.png" alt="User profile picture in the post" class="comments-author__profile-pic">
                <p class="comments-author__author">Alexander Lamdan</p>
                <p class="comments-author__time">Created at: 12:06 pm, 23 October, 2023</p>
              </div>
            </div>
             <div class="comments-block">
              <p class="comments-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t   empor incididunt ut labore et dolore magna aliqua. Lorem mollis aliquam ut porttitor leo a diam sollicitudin.
              </p>
              <div class="comments-author">
                <img src="public/images/profile.png" alt="User profile picture in the post" class="comments-author__profile-pic">
                <p class="comments-author__author">Alexander Lamdan</p>
                <p class="comments-author__time">Created at: 12:06 pm, 23 October, 2023</p>
              </div>
            </div>
          </div>
          <form method="POST" action="news-feed.php" class="comment-section-form">
            <textarea type="text" name="comment" class="comment-section-form__input" id="comment" placeholder="Enter comment"></textarea>
            <input type="submit" name="addComment" id="addComment" class="comment-section-form__button" value="Add">
          </form>
        </section>
      </article>
    </div>
  </section>
<?php require_once 'includes/footer.php';?>
