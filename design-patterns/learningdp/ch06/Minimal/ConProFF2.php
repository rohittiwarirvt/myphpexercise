<?php

include_once('IPrototype.php');

class ConProFF2 extends IPrototype
{

  public function __construct()
  {
    $this->wingColor = "green";
    $this->flying = "Stall easily";
    $this->eyesight = "6/3";
  }

  function __clone(){}
}
