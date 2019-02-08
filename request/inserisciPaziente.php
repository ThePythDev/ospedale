<?php
require_once '../core.php';

$ospedale->getDb()->openCon();

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$cf = $_POST['cf'];
$data_nascita = $_POST['data_nascita'];
$luogo_nascita = $_POST['luogo_nascita'];
$sesso = $_POST['sesso'];
$data_ricovero = $_POST['data_ricovero'];
$diagnosi = $_POST['diagnosi'];

$ospedale->getDb()->query("INSERT INTO pazienti(nome, cognome, cf, data_nascita, luogo_nascita, sesso, data_ricovero, diagnosi) VALUES ('$nome', '$cognome', '$cf', '$data_nascita', '$luogo_nascita', '$sesso', '$data_ricovero', '$diagnosi')");

$ospedale->getDb()->closeCon();

header('location: ../protected/index.php');
?>
