<html>
<body>
	<hr>
		<?php
		if(isset($_SESSION['title']) && isset($_SESSION['content']) && isset($_SESSION['category'])) {
			$title=$_SESSION['title'];
			$cont=$_SESSION['content'];
			$cat= $_SESSION['category'];
			echo "$title";
		}
		
		?>