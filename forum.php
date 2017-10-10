<?php
	session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {
		$name=  $_SESSION['name'];
		echo "<h1>Välkommen till Nein Gag </h1>" ;
		echo  "<p class='name'> $name </p>";
		include("kategori.php");
		echo "<p class='logut'><a href='loggaUt.php'>Logga ut</a></p>";
		echo " <p class='thread'> <a href ='createkat.php'> Skapa Thread </a></p>";
		include('Threads.php');

		
		

			
			
					

			
		



	}
	else {
		header("location:index.php");
	}


	
?>