<?php
require_once '../core.php';

$reparto = $_POST['reparto'];

$stp = '<br>';
$ospedale->getDb()->openCon();

$result = $ospedale->getDb()->query("SELECT * FROM medici WHERE reparto = '$reparto'");
while($row = mysqli_fetch_array($result))
{
  $stp .= '<b>Nome:</b> ' . $row['nome'] . '<br>';
  $stp .= '<b>Cognome:</b> ' . $row['cognome'] . '<br>';
  $stp .= '<b>Codice Fiscale:</b> ' . $row['cf'] . '<br>';
  $stp .= '<b>Data nascita:</b> ' . $row['data_nascita'] . '<br>';
  $stp .= '<b>Luogo nascita:</b> ' . $row['luogo_nascita'] . '<br>';
  $stp .= '<b>Sesso:</b> ' . $row['sesso'] . '<br>';
  $stp .= '<b>Specializzazione:</b> ' . $row['specializzazione'] . '<br>';
  $stp .= '<br>';
}
echo $stp;

$ospedale->getDb()->closeCon();

echo '<a href="../index.php">Torna alla home</a>';
?>
