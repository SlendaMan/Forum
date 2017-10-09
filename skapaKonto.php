<!doctype html>
<html>
	<head>
		<title>Inlogg</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<?php
			if(isset($_POST['uname']) && isset($_POST['passw'])  && isset($_POST['namn']))  {
				$check_uname = ($sql="select uname from user where uname= 'uname'");
				
				if($_POST['uname'] )
				include "config.php";
				$un = htmlentities($_POST['uname']);
				$pw = htmlentities($_POST['passw']);
				$n = htmlentities($_POST['namn']);
				$pw = hasha($pw);
				$sql = "insert into user values (0,?,?,?)";
				if($mysqli = connect_db()) {
					
					if($stmt = $mysqli->prepare($sql)) {
						
						$stmt->bind_param("sss", $un,$pw,$n);
						$stmt->execute();
						$stmt->close();
					}
					$mysqli->close();
					header("location:index.php");
				}
			}
			else {
			echo "<h1>Skapa konto</h1>
				<form action='skapaKonto.php' method='post'>
					<table>
						<tr><td>Användarnamn:</td><td><input type='text' name='uname'></td></tr>
						<tr><td>Lösenord:</td><td><input type='password' name='passw'></td></tr>
						<tr><td>Namn:</td><td><input type='text' name='namn'></td></tr>
						<tr><td colspan='2'><input type='submit' value='skapa konto'></td></tr>
					</table>
				</form>";
			}
		?>
	</body>
</html>