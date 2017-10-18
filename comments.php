<?php

include_once("config.php");
$tid=$_GET['tid'];
	if($con = connect_db()) {
		$sql= "select content from answer where tid=$tid";
		$res = $con->query($sql);
		if($res->num_rows > 0){
		
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$text = $row['content'];
				
				echo  "<p class ='text'> $text </p>"; 

		}	
		$con-> close();	
			
	}
	

}







		?>