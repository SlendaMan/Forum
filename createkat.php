<html>
<body>
	<form method='POST'>
		<table>
			<tr><td>Title:</td><td><input type='text' name='title'></td></tr> 
			<tr><td>Content:</td><td><textarea rows="4" cols="50" name="content"></textarea></td></tr>
			<tr><td>Category:</td><td>

			<select name="category">
				<?php
					include_once("config.php");
					if($con = connect_db()) {
						$sql ="select cid, name from category";
						if($stmt = $con->prepare($sql)) {
							$stmt->execute();
							$stmt->bind_result($cid, $name);
							while($stmt->fetch()) {
								echo "<option value='$cid'>$name</option>";
							}
							$stmt->close();
						}
						$con->close();
					}

				?>
  				
			</select></td></tr>
			<?php
if(isset($_SESSION['title']) && isset($_SESSION['content']) && isset($_SESSION['category'])) {
	echo "<tr><td colspan=2> <a href='Forum.php'> <input type='submit' value='Submit'></td></tr></a>";

}
?>
			
		</table>
	</form>	



<?php
if(isset($_SESSION['title']) && isset($_SESSION['content']) && isset($_SESSION['category'])) {
	
}
else{
	
	echo "<a href='Forum.php'> Avbryt </a>";
}

?>