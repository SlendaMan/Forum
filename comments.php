<?php

		if($tid!=null){
			$sql= "select content from answer where tid=$tid";
			include_once("config.php");
			$con2 = connect_db();
					$res2 = $con2->query($sql);
						if($res2->num_rows > 0){
		
							echo "<ul>";
							while($row1 = $res2->fetch_assoc()) {
							$text = $row1['content'];
				
							echo  "<p class ='text'> $text </p>"; 

								}	
							$con2-> close();	
			
					}
				}
					else{
						echo "inga kommentarer";
					}
?>