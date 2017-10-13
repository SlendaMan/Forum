<?php
	session_start();
	include("config.php");
	if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {
		?>
		<html>
		<link rel="stylesheet" type="text/css" href="stil.css">
		
			
<<<<<<< HEAD
	

	</html>
	<?php
	echo "<h1 class='welcome'>Welcome " . $_SESSION['name']."</h1>";
=======
	</div>

	</html>
	<?php
	echo "<h1 class='welcome'>Welcome " . $_SESSION['name']."</h1>";

>>>>>>> 0b7001dfac94f723b05b686509cdb28a56c9fa73
	
	echo "<p class='createthread'><a href= 'skapaThread.php'> Create thread +</a></p>";
	if($con = connect_db()) {
		$sql ="select tid, heading, content, name from thread, user where thread.uid = user.id";
		$result = $con->query($sql);
		
		if($result->num_rows > 0) {
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$tid = $row['tid'];
				$heading = $row['heading'];
				$threadtext=$row['name'];

				?>
				<html>
				<div class="threadbox">
					<?php
				echo  "<p class ='heading'> $heading </p>". " by $threadtext <br>".$row['content']; 
				echo "<p><a href = 'comment.php?tid=$tid'> Comment </a></p>";
				?>
			</div>
			<br>
			</html>
			<?php
			}
			echo "</ul>";

		}
}
<<<<<<< HEAD
=======



>>>>>>> 0b7001dfac94f723b05b686509cdb28a56c9fa73
		echo "<p class='logout'><a href='loggaUt.php'>Logout</a></p>";
	}
	else {
		header("location:index.php");
	}
	
?>