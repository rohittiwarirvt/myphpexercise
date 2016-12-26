<?php

namespace RohitAuth\Database\phase1;

use RohitAuth\Database\Connectivity\DatabaseConnection;

/**
** $db_name, $host, $port, $username, $password
**/

function getnewDbConnect() {
  $db = new DatabaseConnection("rohit_auth", "localhost", 3306, "root", "rekha");
  return $db;
}


