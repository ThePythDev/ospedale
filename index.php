<?php
require_once 'core.php';
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Ospedale ~ Homepage</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./img/favicon.ico" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">Ospedale</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">HOME</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVIZI
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#inserisciReparto">Inserisci reparto</a></li>
                <li><a href="#getPazienti">Visualizza pazienti</a></li>
                <li><a href="#getMedici">Visualizza medici</a></li>
                <li><a href="#regVisita">Registrazione visita</a></li>
                <li><a href="#getPaziente">Informazioni paziente</a></li>
              </ul>
            </li>
            <li><a href="#loginFooter">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid bg-blue text-center" id="home">
      <h1 class="margin">Ospedale</h1>
      <img class="img-responsive" style="display: inline; width: 300px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Italian_traffic_signs_-_old_-_ospedale.svg/600px-Italian_traffic_signs_-_old_-_ospedale.svg.png">
      <div class="margin"></div>
    </div>

    <div class="container container-margin bg-white body-class" id="inserisciReparto">
      <div class="row">
        <div class="col-sm-8">
          <h2>Inserisci reparto ad un paziente.</h2>
          <div class="margin"></div>
          <form action="request/inserisciReparto.php" method="POST">
            <div class="input-group" style="margin-bottom: 5px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
              <input name="reparto" type="text" class="form-control" placeholder="Inserisci reparto..">
            </div>
            <select name="paziente" class="form-control" style="margin-bottom: 2px;">
              <?php echo $ospedale->selectPazientiNoReparto(); ?>
            </select>
            <button type="submit" class="btn btn-primary form-control">Invia</button>
          </form>
        </div>
        <div class="col-sm-4 text-right" style="margin-top: 20px;">
          <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
      </div>
    </div>

    <div class="container container-margin bg-white body-class" id="getPazienti">
      <div class="row">
        <div class="col-sm-4" style="margin-top: 20px;">
          <span class="glyphicon glyphicon-user logo slideanim"></span>
        </div>
        <div class="col-sm-8">
          <h2>Visualizza elenco pazienti di un reparto.</h2>
          <div class="margin"></div>
          <form action="pages/listPaz.php" method="POST">
            <div class="input-group" style="margin-bottom: 5px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
              <input name="reparto" type="text" class="form-control" placeholder="Inserisci reparto..">
            </div>
            <button type="submit" class="btn btn-primary form-control">Invia</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container container-margin bg-white body-class" id="getMedici">
      <div class="row">
        <div class="col-sm-8">
          <h2>Visualizza elenco medici di un reparto.</h2>
          <div class="margin"></div>
          <form action="pages/listMed.php" method="POST">
            <div class="input-group" style="margin-bottom: 5px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
              <input name="reparto" type="text" class="form-control" placeholder="Inserisci reparto..">
            </div>
            <button type="submit" class="btn btn-primary form-control">Invia</button>
          </form>
        </div>
        <div class="col-sm-4 text-right" style="margin-top: 20px;">
          <span class="glyphicon glyphicon-plus logo slideanim"></span>
        </div>
      </div>
    </div>

    <div class="container container-margin bg-white body-class" id="regVisita">
      <div class="row">
        <div class="col-sm-4" style="margin-top: 20px;">
          <span class="glyphicon glyphicon-briefcase logo slideanim"></span>
        </div>
        <div class="col-sm-8">
          <h2>Registrazione visita.</h2>
          <div class="margin"></div>
          <form action="request/inserisciVisita.php" method="POST">
            <select name="paziente" class="form-control" style="margin-bottom: 2px;">
              <?php echo $ospedale->selectPazienti(); ?>
            </select>
            <select name="medico" class="form-control" style="margin-bottom: 2px;">
              <?php echo $ospedale->selectMedici(); ?>
            </select>
            <button type="submit" class="btn btn-primary form-control">Invia</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container container-margin bg-white body-class" id="getPaziente">
      <div class="row">
        <div class="col-sm-8">
          <h2>Ottieni informazioni paziente.</h2>
          <div class="margin"></div>
          <form action="pages/infoPaz.php" method="POST">
            <select name="id" class="form-control" style="margin-bottom: 2px;">
              <?php echo $ospedale->selectPazienti(); ?>
            </select>
            <button type="submit" class="btn btn-primary form-control">Invia</button>
          </form>
        </div>
        <div class="col-sm-4 text-right" style="margin-top: 20px;">
          <span class="glyphicon glyphicon-tag logo slideanim"></span>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-blue" id="loginFooter">
      <div class="container text-center">
        <div class="col-sm-4">
          <h3>Sito creato da Giuseppe Capone</h3>
          <div class="margin"></div>
        </div>
        <div class="col-sm-8">
          <form action="request/authLogin.php" method="POST">
            <div class="input-group" style="margin-bottom: 5px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="username" type="text" class="form-control" placeholder="Inserisci ID Medico..">
            </div>
            <div class="input-group" style="margin-bottom: 2px;">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input name="password" type="password" class="form-control" placeholder="Inserisci Password..">
            </div>
            <button type="submit" class="btn btn-success form-control">Accedi</button>
          </form>
        </div>
      </div>
    </div>


  </body>

</html>
