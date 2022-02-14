<?php
  session_start();
  include '../utils/init.php';
  include _PHP_CLASS_PATH.'user.class.php';

  if(isset($_POST["email"]) && isset($_POST["password"])){
  $current_user=[
    'id'=>0,
    'email'=>$_POST['email'],
    'password'=>$_POST['password'],
    'name'=>"",
    'surname'=>"",
    'etab'=>"",
    'added_at'=>""
  ];
  $user = new User($current_user);
  
  if ($user->logIn($user) == "found") {
    echo "ok";
  }else {
    echo "not found";
  }
  }else {
  header('location:/');
  }
?>
