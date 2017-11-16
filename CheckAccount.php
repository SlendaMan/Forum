
<?php

session_start();

$bool=true;

if($_POST['Username'] =="" ||  $_POST['Password'] =="" ||
	 $_POST['email'] =="" || $_POST['CheckPassword'] ==""
	|| $_POST['Name'] ==""
	){
	header("location:CreateAccount.php?Error=6");
$bool=false;
}
	else{
		$name = htmlentities($_POST['Name']);
		
		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
			header("location:CreateAccount.php?Error=1");
			$bool=false;
			}
				$mail = $_POST['email'];
		if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
				header("location:CreateAccount.php?Error=5");
				$bool=false;
			}	
						
		if(strlen($_POST['Password']) < 4){
						header("location:CreateAccount.php?Error=3");
						$bool=false;;
					}
						else{
							if( $_POST['Password']!= $_POST['CheckPassword']){
							header("location:CreateAccount.php?Error=4");
							$bool=false;
						}
						
					
					}
				}
	if(isset($_POST['Username'])){
		if($bool==true ){
				include('Config.php');
if($con =connect_db()){
	

			$sql = "select count(uname) as antal from user where uname = ?";
				
				if($stmt = $con->prepare($sql)){
					$stmt->bind_param("s",$_POST['Username']);
					$stmt->execute();
					$stmt->bind_result($antal);
					$stmt->fetch();
					
					if($antal >0){
						header("location:CreateAccount.php?Error=2");
					}
					
					else{
						$to      = 'oscar.forsyth61@gmail.com';
						//dont forget to protect against injections
								$subject = 'the subject';
								$message = 'hello';
								$headers = 'From: webmaster@example.com' . "\r\n" .
   								 'Reply-To: webmaster@example.com' . "\r\n" .
  								  'X-Mailer: PHP/' . phpversion();

								mail($to, $subject, $message, $headers);
								
								
								header('location:index.php?created');	
					}
					$stmt->close();
				}
				
				
}
				}
}
else{
	echo "det funka nte";
}
				// om det finns ingen error så kopplas
				 //man till databasen, annars kan databasen
				  //överbalastas 

		
	

	





					?>