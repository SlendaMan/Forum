<?php
 if(isset($_GET['created'])) {
 	echo "<script language='javascript'>";
	echo "alert('Acoount successfully created')";
	echo "</script>";
 }
?>
<!doctype html>
<html>
	<head>
		<title> Login </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="stil.css">
	</head>
	<body>
		<center>
		<p > Gymarbete</p>
		<form  action="CheckLogin.php" method="post">
			<table>
				<tr><br><td><input placeholder="Enter Username" col="10" type="text" name="username"></td></tr>
				<tr><td><input placeholder="Enter Password" type="password" name="password"></td></tr>

				<tr><td colspan="2"><input type="submit"class="login" value="Login"></td></tr>
			</table>
		</form>
		<p><a href="CreateAccount.php">Create free account!</a></p>
	</center>
</body>
