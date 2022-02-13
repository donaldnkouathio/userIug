<?php
  if(!isset($_SESSION["email"])){
    include _PHP_PAGES_PATH.'users.php';
  }else {
    include _PHP_PAGES_PATH.'login.php';
  }
?>
