<?php

include_once('Creator.php');
include_once('GraphicProduct.php');

class GraphicFactory extends Creator
{

  protected function  factoryMethod()
  {
    $graphic = new GraphicProduct();
    return $graphic;
  }
}
