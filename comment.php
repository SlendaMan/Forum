<?php
session_start();
	include_once("config.php");
		//$tid = $_GET['tid'];
		if(isset($_POST['comment']) && $_POST['comment']!="" && isset($_POST['tid'])){
			
			$com=$_POST['comment'];
			$tid = htmlentities($_POST['tid']);
			
			$sql = "INSERT INTO answer values(0,?,?)";
				if($con = connect_db()){
			
					
					if($s = $con->prepare($sql)) {
						
						$s->bind_param("si",$com,$tid);
						$s->execute();
						$s-> close();
						
						}
						
					}
				header("location:forum.php");
			}


			else{
				header("location:commentforum.php?tid=$tid");
			}
				
		

		
		
	
		

?>