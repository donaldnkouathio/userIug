<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=4">
    <title><?php echo ucfirst($utils->getCurrent_page()); ?> - Users App</title>

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>

    <link rel="stylesheet" href="<?php echo _HTML_STYLES_PATH.'vars.css'; ?>">

    <?php
      if(isset($_SESSION["theme"])){
        if($_SESSION["theme"] == "night"){
    ?>
      <link rel='stylesheet' href="<?php echo _HTML_STYLES_PATH.'themes/night.css'; ?>">
    <?php }else { ?>
      <link rel='stylesheet' href="<?php echo _HTML_STYLES_PATH.'themes/light.css'; ?>">
    <?php } } ?>

    <link rel="stylesheet" href="<?php echo _HTML_STYLES_PATH.'global.css'; ?>">
    <link rel="stylesheet" href="<?php echo _HTML_STYLES_PATH.'header.css'; ?>">
    <link rel="stylesheet" href="<?php echo _HTML_STYLES_PATH.'login.css'; ?>">
    <link rel="stylesheet" href="<?php echo _HTML_STYLES_PATH.'users.css'; ?>">

    <script type="text/javascript" src="<?php echo _HTML_JS_PATH.'jquery.js' ?>"> </script>
  </head>
  <body>
    <div class='app_container'>
