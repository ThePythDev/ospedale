<?php
require_once '../core.php';

$medico = $_POST['medico'];
$paziente = $_POST['paziente'];

$ospedale->getDb()->openCon();

$ospedale->getDb()->query("INSERT INTO visite(medico, paziente) VALUES ('$medico', '$paziente')");

$ospedale->getDb()->closeCon();

header('location: ../index.php');
?>
