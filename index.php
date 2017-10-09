<!doctype html>
<html>
	<head>
		<title>Inlogg</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="stil.css">
	</head>
	<body>
		<?php
			if(isset($_GET['fel'])) {
				$fel = $_GET['fel'];
				if($fel == 1)
					echo "<p>Du måste ange både användarnamn och lösenord för att logga in</p>";
				if($fel == 2)
					echo "<p>Fel användarnamn eller lösenord!</p>";
			}
		?>
		<center>
		<p class="loggain"> NienGag</p>
		<form class="loginform" action="checkInlogg.php" method="post">
			<table>
				<tr><td>Username</td><br><td><input placeholder="Enter Username" col="10" type="text" name="uname"></td></tr>
				<tr><td>Password</td><td><input placeholder="Enter Password" type="password" name="passw"></td></tr>

				<tr><td colspan="2"><input type="submit" value="Login"></td></tr>
			</table>
		</form>
		<p><a href="skapaKonto.php">Create free account!</a></p>
	</center>
	</body>
</html>