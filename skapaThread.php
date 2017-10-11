<?php
if (!(session_status() == PHP_SESSION_ACTIVE)) {
	session_start();
}
if(isset($_POST['category']) && isset($_POST['rubrik']) && isset($_POST['trad'])) {
	
	include_once("config.php");
	$cid = htmlentities($_POST['category']);
	$r = htmlentities($_POST['rubrik']);
	$t = htmlentities($_POST['trad']);
	$uid = $_SESSION['id'];
	$sql = "insert into thread values (0, ?,?,?)";
	if($con = connect_db()) {
		if($s = $con->prepare($sql)) {
			$s->bind_param("ssi",$r,$t,$uid);
			$s->execute();
			$s->close();
		}
		$sql = "insert into belong values ((select tid from thread order by tid desc limit 1), ?)";
		if($con = connect_db()){
			if($s = $con->prepare($sql)){
				$s->bind_param("i",$cid);
				$s->execute();
				$s->close();
			}
		}

	}
	header("location:forum.php");

}
else {
	include("ThreadForm.php");
}

?>