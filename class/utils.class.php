<?php
  class Utils{
    private $current_page;

    public function __construct($current_page="home"){
      $this->current_page= $current_page;
    }

    public function getCurrent_page(){
      return $this->current_page;
    }
    public function setCurrent_page($current_page){
      $this->current_page= $current_page;
    }
  }
?>
