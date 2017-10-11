<?php
	session_start();
	include("config.php");
	if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {
		echo "<h1>Välkommen " . $_SESSION['name']."</h1>";
		echo "<p><a href= 'skapaThread.php'> Skapa tråd</a></p>";

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



		echo "<p><a href='loggUt.php'>Logga ut</a></p>";
	}
	else {
		header("location:index.php");
	}

	
?>