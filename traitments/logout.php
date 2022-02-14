<?php
  session_start();
  include '../utils/init.php';
  include _PHP_CLASS_PATH.'user.class.php';

  $current_user=[
    'id'=>0,
    'email'=>"",
    'password'=>"",
    'name'=>"",
    'surname'=>"",
    'etab'=>"",
    'added_at'=>""
  ];
  $user = new User($current_user);

  $user->logOut();

  echo "ok";

?>
