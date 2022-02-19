<header>
  <div class="logo_block">
    <img src="<?php echo _HTML_ASSETS_PATH.'user.png' ?>" alt="user logo">
    USERS APP
  </div>
  <nav>
    <a class="nav-item <?php if($utils->getCurrent_page() == "home"){echo "link_hover";} ?>" href="?page=home">Home</a>
    <?php
      if (isset($_SESSION["email"])) {
    ?>
    <span class="nav-item add_user_btn">Add User</span>
    <span class="nav-item lo_btn">Log Out</span>

    <?php } ?>

    <?php
      $theme= $_SESSION["theme"] == "light" ? "Dark Mode" : "Light Mode";
      $icon_theme= $_SESSION["theme"] == "light" ? "brightness_4" : "brightness_5";
    ?>
    <span
      class="nav-item theme_btn"
      title="Switch app's theme to <?php echo $theme; ?>"
    >
      <i class="material-icons" style="font-size: 1em"><?php echo $icon_theme; ?></i>
    </span>
    
  </nav>
</header>

<?php
  include _PHP_PAGES_PATH.'add-user.php';
?>
