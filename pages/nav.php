<header>
  <div class="logo_block">
    <img src="<?php echo _HTML_ASSETS_PATH.'user.png' ?>" alt="user logo">
    Users Iug
  </div>
  <nav>
    <a class="nav-item <?php if($utils->getCurrent_page() == "home"){echo "link_hover";} ?>" href="?page=home">Home</a>
    <span class="nav-item add_user_btn">Add User</span>
    <span class="nav-item lo_btn">Log Out</span>
  </nav>
</header>

<?php
  include _PHP_PAGES_PATH.'add-user.php';
?>
