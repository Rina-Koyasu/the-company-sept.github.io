<?php
//No.1
class Database
{
  private $server_name = "localhost";
  private $username = "root";
  private $password = ""; //For MAMP user use root ////
  private $db_name = "the_company_sept";
  protected $conn; //use in the child class

  public function __construct()
  {
    //MySQLと接続する
    $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

    //接続できなかった場合エラー
    if ($this->conn->connect_error) {
      die('Unable to connect the database: ' . $this->conn->connect_error);
    }
  }
}
