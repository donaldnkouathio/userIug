<header>
  <div class="logo_block">
    Hellow User
  </div>
  <nav>
    <a class="nav-item <?php if($utils->getCurrent_page() == "home"){echo "link_hover";} ?>" href="?page=home">Home</a>
    <span class="nav-item">Add User</span>
    <span class="nav-item log_out_btn">Log Out</span>
  </nav>
</header>
