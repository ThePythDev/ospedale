<?php
require_once '../core.php';

$reparto = $_POST['reparto'];
$id = $_POST['paziente'];

$ospedale->getDb()->openCon();
$ospedale->getDb()->query("UPDATE pazienti SET reparto = '$reparto' WHERE id = '$id'");
$ospedale->getDb()->closeCon();

header('location: ../index.php');
?>
