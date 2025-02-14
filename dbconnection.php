<?php
class Dbconnection
{

  private $servername = "localhost";  //jako stale 
  private $username = "root";
  private $password = "";
  private $database = "praktyka";
  // Create connection
  //zmeinna prywatna w obiekcie deklarujaca sie automatycznie w konstruktorze bez parametrowym, metoda query 
  //throw

  private $mysqli;

  public function __construct()
  {
    $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->database);

    // Check connection
    if ($this->mysqli->connect_errno) {
      throw new Exception("Failed to connect to MySQL" . $this->mysqli->connect_error);
    }
  }

  public function query($sql)
  {
    try {
      return $this->mysqli->query($sql);
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }
}
