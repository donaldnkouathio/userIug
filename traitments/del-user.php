<?php
  include '../utils/init.php';
  include _PHP_CLASS_PATH.'user.class.php';

  if(isset($_POST['id'])){
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

    if($user->removeUser($_POST['id'])){
      echo "ok";
    }else {
      echo "error";
    }
  }
?>
