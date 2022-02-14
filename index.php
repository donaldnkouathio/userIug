<?php
  session_start();
  include('utils/init.php');
  require(_PHP_CLASS_PATH.'utils.class.php');
  include _PHP_CLASS_PATH.'user.class.php';

  $utils= new Utils();

  $current_user=[
  	'id'=>0,
  	'email'=>"",
  	'password'=>"",
  	'name'=>"",
  	'surname'=>"",
  	'etab'=>"",
	  'added_at'=>""
  ];
  $user= new User($current_user);

  if(isset($_GET["page"])){
    $file_page= _PHP_PAGES_PATH.$_GET["page"].'.php';

    if (file_exists($file_page)) {
      $content = $file_page;
      $utils->setCurrent_page($_GET["page"]);
    }
    else{
      $content = _PHP_PAGES_PATH.'/error.php';
      $utils->setCurrent_page('error');
    }
  }
  else {
    $content = _PHP_PAGES_PATH.'/home.php';
  }

  include(_PHP_PAGES_PATH.'head.php');
  include(_PHP_PAGES_PATH.'nav.php');
  include($content);
  include(_PHP_PAGES_PATH.'footer.php');

?>
