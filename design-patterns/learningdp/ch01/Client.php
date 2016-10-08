<?php

include_once('MobileSniffer.php');

class Client
{
  private $mobileSniff;

  public function __construct()
  {
    $this->mobileSniff = new MobileSniffer();

    echo 'Device=' . $this->mobileSniff->findDevice();
    echo 'Browser='. $this->mobileSniff->findBrowser();
  }
}

$client = new Client();
