<?php
session_start();
	include_once("config.php");
		$tid = $_GET['tid'];
		if(isset($_POST['comment'])){
			
			$com=$_POST['comment'];
					
					$sql = "insert into answer values(0,?,?)";
				if($con = connect_db()){
					if($s = $con->prepare($sql)) {
						$s-> bind_param("si",$com,$tid);
						$s-> execute();
						$s-> close();
						
						}
						
					}
				
			}

			else{
				header("location:commentforum.php?tid=$tid");
			}
				
		

		
		
	
		

?>