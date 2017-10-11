<form method="POST">
	<table>
		<tr><td>Kategori:</td><td><select name="category">
			<?php
		
				include_once("config.php");
				if($con = connect_db()) {
					$sql = "select cid, name from category";
				
					if($s = $con->prepare($sql)) {
						$s->execute();
						$s->bind_result($cid, $name);
						while($s->fetch()) {
							echo "<option value='$cid'>$name</option>";
						}
					}
				}
			?>
		</select></td></tr>
		<tr><td>Rubrik:</td><td><input type="text" name="rubrik"></td></tr>
		<tr><td>Innehåll:</td><td><textarea name="trad"></textarea></td></tr>
		<tr><td colspan="2"><input type="submit" value="lägg till"></td></tr>
	</table>
</form>





