<html>
<link rel="stylesheet" type="text/css" href="stil.css">
</html>
<?php
	session_start();					

$NameErr ="";//Error 1
$userErr=""; //Error 2
$PassErr=""; //Error 3
$Pass1Err="";//Error 4
$EmailErr= "";//Error 5
$blank="";	//Error 6
$bool=true;
if(isset($_GET['Error'])){
	$bool==false;
if($_GET['Error'] ==1){
	$NameErr="Invalid name";
}		
if($_GET['Error'] ==2){
	$userErr="Username already taken";
}	
if($_GET['Error'] ==3){
	$PassErr="Password not strong enough";
}	
if($_GET['Error'] ==4){
	$Pass1Err="Passwords do not match";
}	
if($_GET['Error'] ==5){
	$EmailErr="Invalid Email";
}		
if($_GET['Error'] ==6){
	$blank="Fill in all details";
}
		}


				
					/*if($Confirmation==1){

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
						}*/
							
					
					
				
	echo"
		<form name='form' action='CheckAccount.php' method='post' onSubmit='checkform()'> 
			<table>
				<tr><td>Your Name: </td><td><input type='text' name='Name'> " . $NameErr. "</td></tr>
				<tr><td>Username: </td><td><input type='text' name='Username'> " . $userErr. "</td></tr>
				<tr><td>Password: </td><td><input type='password' name='Password'> " . $PassErr. "</td></tr>
				<tr><td>Repeat Password: </td><td><input type='password' name='CheckPassword'>" . $Pass1Err. "</td></tr>
				<tr><td>Your Email Adress: </td><td><input type='text' name='email'>" . $EmailErr. "</td> </tr>
				<tr><td colspan='2'><input type='submit' value='Create Account'></td></tr>
				" . $blank . "
			<table>
			</form>
		";



	



		
		 
		
?>