<?php
require_once 'core.php';
?>

<html>
	<head>
		<title>Ospedale</title>
	</head>
	<body>

		<!-- INSERIMENTO REPARTO AL PAZIENTE -->
		<form action="request/inserisciReparto.php" method="POST">
			<input type="text" name="reparto" placeholder="Inserisci reparto.." required />
			<br />
			<select name="paziente">
				<?php
				$stp = '<option disabled selected>Inserisci paziente</option>';
				$result = mysqli_query($db, "SELECT * FROM pazienti WHERE reparto IS NULL");
				while($row = mysqli_fetch_array($result))
				{
					$stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
				}
				echo $stp;
				?>
			</select>
			<br />
			<input type="submit" value="Invia" />
		</form>
		<!-- ________________________ -->


		<!-- INSERIMENTO NUOVO PAZIENTE -->
		<form action="request/inserisciPaziente.php" method="POST">
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


		<!-- INSERIMENTO VISITA -->
		<form action="request/inserisciVisita.php" method="POST">
			<select name="paziente">
				<?php
				$stp = '<option disabled selected>Inserisci CF paziente</option>';
				$result = mysqli_query($db, "SELECT id, cf FROM pazienti");
				while($row = mysqli_fetch_array($result))
				{
					$stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
				}
				echo $stp;
				?>
			</select>
			<br />
			<select name="medico">
				<?php
				$stp = '<option disabled selected>Inserisci CF medico</option>';
				$result = mysqli_query($db, "SELECT id, cf FROM medici");
				while($row = mysqli_fetch_array($result))
				{
					$stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
				}
				echo $stp;
				?>
			</select>
			<br />
			<input type="submit" value="Invia" />
		</form>
		<!-- ________________________ -->


		<!-- VISUALIZZA PAZIENTI DATO REPARTO -->
		<form action="request/pazientiReparto.php" method="POST">
			<input type="text" name="reparto" placeholder="Inserisci reparto pazienti.." />
			<br />
			<input type="submit" value="Invia" />
		</form>
		<!-- ________________________ -->


		<!-- VISUALIZZA PAZIENTI DATO REPARTO -->
		<form action="request/mediciReparto.php" method="POST">
			<input type="text" name="reparto" placeholder="Inserisci reparto medici.." />
			<br />
			<input type="submit" value="Invia" />
		</form>
		<!-- ________________________ -->


		<!-- RICERCA PAZIENTE -->
		<form action="request/ricercaPaziente.php" method="POST">
			<select name="id">
				<?php
				$stp = '<option disabled selected>Inserisci cf paziente</option>';
				$result = mysqli_query($db, "SELECT id, cf FROM pazienti");
				while($row = mysqli_fetch_array($result))
				{
					$stp .= '<option value="' . $row['id'] . '">' . $row['cf'] . '</option>';
				}
				echo $stp;
				?>
			</select>
			<br />
			<input type="submit" value="Invia" />
		</form>
		<!-- ________________________ -->


		<!-- LOGIN -->
		<form action="request/authLogin.php" method="POST">
			<input type="text" name="username" placeholder="Inserisci username.." />
			<br />
			<input type="password" name="password" placeholder="Inserisci password.." />
			<br />
			<input type="submit" value="Accedi" />
		</form>
		<!-- ________________________ -->

	<?php
	mysqli_close($db);
	?>
	</body>
</html>
