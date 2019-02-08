<?php
require_once '../core.php';

$id = $_POST['id'];

$ospedale->getDb()->openCon();

$result = $ospedale->getDb()->query("SELECT * FROM pazienti WHERE id = '$id'");
$paziente = mysqli_fetch_array($result);
$stp = '<br>';
$stp .= '<b>Nome:</b> ' . $paziente['nome'] . '<br>';
$stp .= '<b>Cognome:</b> ' . $paziente['cognome'] . '<br>';
$stp .= '<b>Codice Fiscale:</b> ' . $paziente['cf'] . '<br>';
$stp .= '<b>Data nascita:</b> ' . $paziente['data_nascita'] . '<br>';
$stp .= '<b>Luogo nascita:</b> ' . $paziente['luogo_nascita'] . '<br>';
$stp .= '<b>Sesso:</b> ' . $paziente['sesso'] . '<br>';
$stp .= '<b>Data ricovero:</b> ' . $paziente['data_ricovero'] . '<br>';
$stp .= '<b>Diagnosi:</b> ' . $paziente['diagnosi'] . '<br>';
$stp .= '<br>';
echo $stp;

$ospedale->getDb()->closeCon();

echo '<a href="../index.php">Torna alla home</a>';
?>
