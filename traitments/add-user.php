<?php
  include '../utils/init.php';
  include _PHP_CLASS_PATH.'user.class.php';

  if(isset($_POST['name'])){
    $current_user=[
    	'id'=>0,
    	'email'=>$_POST['email'],
    	'password'=>$_POST['password'],
    	'name'=>$_POST['name'],
    	'surname'=>$_POST['surname'],
    	'etab'=>$_POST['etab'],
  	  'added_at'=>""
    ];
    $user = new User($current_user);

    $user->addUser($user);
  }
?>
