<?php

include_once('GraphicFactory.php');

class Client
{


  public function __construct()
  {
    $graphicFactory = new GraphicFactory();
    $obj = $graphicFactory->doFactory();
    echo $obj->getProperties();
  }

}


$client = new Client();
