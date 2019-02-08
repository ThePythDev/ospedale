<?php
require_once '../core.php';

$username = $_POST['username'];
$password = $_POST['password'];

$ospedale->getDb()->openCon();

if(mysqli_num_rows($ospedale->getDb()->query("SELECT * FROM credenziali WHERE medico = '$username' AND password = '$password' LIMIT 1")) > 0)
{
  $_SESSION['username'] = $username;
}

$ospedale->getDb()->closeCon();

header('location: ../protected/index.php');

?>
