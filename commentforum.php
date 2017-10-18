<?php

include_once("config.php");
	$tid = $_GET['tid'];
	if($con = connect_db()) {
		if(isset($_GET['tid'])){
	
	
		$sql ="select tid, heading, content, name from thread, user where thread.tid = $tid";
		$result = $con->query($sql);
		
		if($result->num_rows > 0) {
			echo "<ul>";
			while($row = $result->fetch_assoc()) {
				$tid = $row['tid'];
				$heading = $row['heading'];
				$name= $row['name'];


			echo  "<p class ='heading'> $heading </p>". " by $name <br>".$row['content']; 
	
			}	
		}
	}
}


echo"<h1> Comment </h1>
<form method='post' action='comment.php' >
	<table>
		<tr><td>Comment:</td><td><textarea name='comment'></textarea></td></tr>
			<input type='hidden' name='tid' value='$tid'>
		</td></tr>
		
	<tr><td colspan='2'><input type='submit' value='Comment' ></td></tr>
	</table>
</form>
";

?>