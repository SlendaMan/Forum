<?php
	include("config.php");
	echo "hej";
	if($con = connect_db()) {
		$sql ="select tid, heading, content, name from thread, user where thread.uid = user.id";
		$result = $con->query($sql);

	$tid = $row['tid'];
	$heading = $row['heading'];
	$threadtext=$row['name'];

	echo  "<p class ='heading'> $heading </p>". " by $threadtext <br>".$row['content']; 
				
			

		
	}

?>