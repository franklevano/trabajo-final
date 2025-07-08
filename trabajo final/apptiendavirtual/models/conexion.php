<?php
class conexion {

  private $servername = "localhost";
  private $username = "u891892907_tiendavirtual";
  private $password = "Compartido014/";
  private $dbname = "u891892907_tiendavirtual";

  function getconexion(){
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    return $conn;
  }

}