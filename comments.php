<?php

include_once("config.php");
	if($con = connect_db()) {
		if(isset($_POST['comment'])){
		
		$sql ="select content from answer where tid = 0";
		$result = $con->query($sql);
		
		if($result->num_rows > 0) {
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$text = $row['content'];
				
				echo  "<p class ='text'> $text </p>"; 

				
			
			
}
header("location:forum.php");
}
}
else{
	echo "inga kommentarer";
}
$con-> close();
}

		?>