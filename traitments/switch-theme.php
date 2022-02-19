<?php

  session_start();

  $_SESSION["theme"] = $_SESSION["theme"] == "light" ? "night" : "light";
  
?>
