<html>
<body>
	
		<table>
			<form method="post" action="forum.php">
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
			 <tr><td colspan=2> <a href='forum.php'> <input type='submit' value='Submit'></td></tr></a>
		</form>		
		</table>

<?php
if(isset($_SESSION['title']) && isset($_SESSION['content']) && isset($_SESSION['category'])) {
	$id=$_SESSION['id'];
	$title= $_POST['title'];
	$text = $_POST['text'];
	$sql = "insert into thread values(0,?,?,?)";
	
	if($res= $con->prepare($sql)){
		$res->bind_param("ssi",$head,$cont,$uid);
		$res->excute();
		$res->close;
		$res->bind_result($tid,$heading,$content,$uid);


	}
	$sql = "insert into belong values((select tid from thread order by tid desc limit 1),?)";
	if($con=connect_db()){
		if($s->$con->prepare($sql)){
			$s->bind_param("i",$cid);
			$s->excute;
			$s->close;
		}
	}

}
else{
	
	echo "<a href='Forum.php'> Avbryt </a>";

}
?>