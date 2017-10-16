<?php
if (!(session_status() == PHP_SESSION_ACTIVE)) {
	session_start();
}
	include_once("config.php");
	
if($con = connect_db()) {

	$tid = htmlentities($_GET['tid']);
		$sql ="select tid, heading, content, name from thread, user where thread.tid = $tid";
		$result = $con->query($sql);
		
		if($result->num_rows > 0) {
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$tid = $row['tid'];
				$heading = $row['heading'];
				$name=$row['name'];


			echo  "<p class ='heading'> $heading </p>". " by $name <br>".$row['content']; 
	
				
		}	
		}

		if(isset($_POST['comment'])){
			include_once("config.php");
					$com=$_POST['comment'];
					$sql = "insert into answer values(0,?)";
				
					if($s = $con->prepare($sql)) {
						$s->bind_param("s",$com);
						$s->execute();
						$s->close();
						
					}
				
			}
			else{
				header("location:commentforum.php");
			}
				
		

		
		
	}
		

?>