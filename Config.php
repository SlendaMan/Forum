<?php 

	
function connect_db() { 

		

	$mysqli = new mysqli('localhost', 'root', '', 'gymarbete');

		
	if (!$mysqli->set_charset("utf8")) {
		echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
	}

	if ($mysqli->connect_errno) {
		echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli;
}

function hasha($str) {
	$hash = password_hash($str, PASSWORD_DEFAULT);
	return $hash;
}

function checkPasswd($pw,$p) {
	return password_verify($pw, $p);
}

?>