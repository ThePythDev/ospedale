<?php
require_once '../core.php';
if(!$_SESSION['username'])
{
	echo 'Utente non autorizzato.';
	exit();
}
?>

<html>
	<head>
		<title>Ospedale</title>
	</head>
	<body>

		<b>Inserisci nuovo paziente.</b>

		<!-- INSERIMENTO NUOVO PAZIENTE -->
		<form action="../request/inserisciPaziente.php" method="POST">
			<input type="text" name="nome" placeholder="Inserisci nome.." required />
			<br />
			<input type="text" name="cognome" placeholder="Inserisci cognome.." required />
			<br />
			<input type="text" name="cf" placeholder="Inserisci CF.." required />
			<br />
			<input type="date" name="data_nascita" required />
			<br />
			<input type="text" name="luogo_nascita" placeholder="Inserisci luogo nascita.." required />
			<br />
			<input type="text" name="sesso" placeholder="Inserisci sesso.." required />
			<br />
			<input type="date" name="data_ricovero" value="<?php echo date('Y-m-d'); ?>" required />
			<br />
			<input type="text" name="diagnosi" placeholder="Inserisci diagnosi.." required />
			<br />
			<input type="submit" value="Invia" />
		</form>
		<!-- ________________________ -->

		<a href="../logout.php">Logout</a>

	</body>
</html>
