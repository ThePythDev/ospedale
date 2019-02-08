<?php
/*  PER MODIFICARE LE CREDENZIALI DEL DBMS, MODIFICARE IL COSTRUTTORE DELLA CLASSE OSPEDALE */
require_once 'class/Database.php';
require_once 'class/Ospedale.php';

$ospedale = new Ospedale();

session_start();
?>
