<?php

function __autoload($class_name)
{
  include  $class_name . '.php';
}

class Client
{

  private $fly1;
  private $fly2;

  private $c1fly1;
  private $c2fly2;
  private $updatedCloneFly;

  public function __construct()
  {
    $this->fly1 = new ConProFF1();
    $this->fly2 = new ConProFF2();

    //Clone
    $this->c1fly1 = clone $this->fly1;
    $this->c2fly2 = clone $this->fly2;
    $this->updatedCloneFly = clone $this->fly2;

    // update clone
    //
    $this->updatedCloneFly->wingColor = "grea";
    $this->updatedCloneFly->eyesight = "Tunnel vission";
    $this->updatedCloneFly->flying="Crsaheds";

    // display flies
    $this->showFly($this->fly1);
    $this->showFly($this->fly2);
    $this->showFly($this->c1fly1);
    $this->showFly($this->c2fly2);
    $this->showFly($this->updatedCloneFly);
  }

  public function showFly(IPrototype $fly)
  {
    echo "Wing color: " . $fly->wingColor . "<br/>";
    echo "Flying characteristics: " . $fly->flying . "<br/>";
    echo "Eye sight: " . $fly->eyesight . "<p/>";
  }
}

$client = new Client();
