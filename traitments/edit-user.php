<?php
  include '../utils/init.php';
  include _PHP_CLASS_PATH.'user.class.php';

  if(isset($_POST['name'])){
    $current_user=[
    	'id'=>$_POST['id'],
    	'email'=>$_POST['email'],
    	'password'=>"",
    	'name'=>$_POST['name'],
    	'surname'=>$_POST['surname'],
    	'etab'=>$_POST['etab'],
  	  'added_at'=>""
    ];
    $user = new User($current_user);

    $user->editUser($user);
  }
?>
