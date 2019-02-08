<?php

class Database{

  private $host = null;
  private $user = null;
  private $password = null;
  private $db_name = null;
  private $connection = null;

  function __construct($host, $user, $password, $db_name)
  {
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->db_name = $db_name;
  }

  public function openCon()
  {
    $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }

  public function closeCon()
  {
    mysqli_close($this->connection);
  }

  public function getCon()
  {
    return $this->connection;
  }

  public function query($query)
  {
    $result = mysqli_query($this->getCon(), $query);

    return $result;
  }

}

?>
