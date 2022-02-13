<?php
// Testmodus aktivieren / deaktivieren
	define ("TESTMODUS", true);

//Funktion zum Verbindungsaufbau
	function db_connect()
	{
		require_once CONFIG_DIR.'/dbconfig.php';


		$dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die (db_fehler("connect"));

		return $dbh;
	}

//Abfragefunktion mit Verbindungsaufbau
	function db_query($sql)
	{
		//if (TESTMODUS) {echo $sql;}
		$dbh=db_connect();
		$result = mysqli_query ($dbh, $sql);

		db_close($dbh);
		return $result;
	}

// Verbindungsabbau
	function db_close($dbh)
	{
		mysqli_close($dbh);
	}

//Fehlerbehandlung
	function db_fehler($fehler)
	{
		if(TESTMODUS)
		{
			echo
				"Fehler beim MySQL-Befehl " .
				$fehler .
				"<li> Fehlernummer errno = " .
				mysqli_errno() .
				"<li> Fehlertext error = " .
				mysqli_error();
		}
	}



	function db_show_query($sql, $dbh) {

	}


	function db_create_checkbox($sql, $dbh, $name) {

	}


	function db_exist($sql, $dbh) {

	}



	function zeigeParameter() {

	}
?>
