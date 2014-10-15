<?php

require_once 'dbase.php';

class Main extends Dbase {

  function __construct() {
    try {
      $this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpassword);
    } catch (PDOException $e) {
      echo "Error!: " . $e->getMessage();
      die();
    }
  }
}
?>