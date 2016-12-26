<?php

namespace RohitAuth\Database\Connectivity;
use \PDO;

class DatabaseConnection {

  public static $instance;
  public $pdo_connection;
  private $db_name, $host, $port, $username, $password;

  private function __construct($db_name, $host, $port, $username, $password) {
    $this->db_name = $db_name;
    $this->host = $host;
    $this->port = $port;
    $this->username = $username;
    $this->password = $password;
  }

  public function getInstance($db_name, $host, $port, $username, $password) {
    if (self::$instance  == NULL) {
        $classname = __CLASS__;
        self::$instance = new $classname($db_name, $host, $port, $username, $password);
    }
    return self::$instance;
  }

  public function getConnection($db_name = "rohit_auth", $host = "localhost", $port = "3306", $username = "root", $password = "root") {
    try {
      $db = $this->getInstance($db_name, $host, $port, $username, $password);
     return  $db->initConnection();
    } catch(Exception $e) {
      print "Error :" $e->getMessage() . "<br/>";
    }
  }

  protected function initConnection() {

     $connection_string = "mysql:host={$this->host]};port={$this->port};dbname={$this->db_name}";
     try {
      $this->db->pdo_connection = new PDO($connection_string, $this->username, $this->password);
      $this->db->pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->db->pdo_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $this->db;
     } catch(Exception $e) {
        print "Error" . $e->getMessage(). "<br/>";
     }
  }

  public function closeConnection() {
    $db = self::$instance;
    $db->pdo_connection = NULL;
  }

  public function __clone() {
    throw new Exception("Can't clone a singleton");
  }
}
