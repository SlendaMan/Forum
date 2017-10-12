<?php
	session_start();
	include("config.php");
	if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {
		?>
		<html>
		<link rel="stylesheet" type="text/css" href="stil.css">
		
			
	</div>

	</html>
	<?php
	echo "<h1 class='welcome'>Welcome " . $_SESSION['name']."</h1>";

	
	echo "<p class='createthread'><a href= 'skapaThread.php'> Create thread +</a></p>";
	if($con = connect_db()) {
		$sql ="select tid, heading, content, name from thread, user where thread.uid = user.id";
		$result = $con->query($sql);
		
		if($result->num_rows > 0) {
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$tid = $row['tid'];
				echo "<li>Headline :<b>" . $row['heading']. "</b> Content : <b>".$row['content']."</b> User: <b>".$row['name']."</b></li>"; 
				echo "<p><a href = 'Svar.php?tid=$tid'> Svara </a></p>";
			}
			echo "</ul>";
		}
}



		echo "<p class='logout'><a href='loggaUt.php'>Logout</a></p>";
	}
	else {
		header("location:index.php");
	}

	
?>