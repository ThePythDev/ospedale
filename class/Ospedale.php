<?php

class Ospedale{

  private $db = null;

  function __construct()
  {
    $this->db = new Database('localhost', 'root', 'dbpassword', 'ospedale');
  }

  public function getDb()
  {
    return $this->db;
  }

  public function selectPazientiNoReparto()
  {
    $this->getDb()->openCon();

    $stp = '<option disabled selected>Inserisci paziente</option>';
    $result = $this->getDb()->query("SELECT * FROM pazienti WHERE reparto IS NULL");
    while($row = mysqli_fetch_array($result))
    {
      $stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
    }

    $this->getDb()->closeCon();

    return $stp;
  }

  public function selectPazienti()
  {
    $this->getDb()->openCon();

    $stp = '<option disabled selected>Inserisci Codice Fiscale Paziente</option>';
    $result = $this->getDb()->query("SELECT id, cf FROM pazienti");
    while($row = mysqli_fetch_array($result))
    {
      $stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
    }

    $this->getDb()->closeCon();

    return $stp;
  }

  public function selectMedici()
  {
    $this->getDb()->openCon();

    $stp = '<option disabled selected>Inserisci Codice Fiscale Medico</option>';
    $result = $this->getDb()->query("SELECT id, cf FROM medici");
    while($row = mysqli_fetch_array($result))
    {
      $stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
    }

    $this->getDb()->closeCon();

    return $stp;
  }


}

?>
