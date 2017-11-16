<!-- title and description -->    
<h3>Signup Form</h3>
<p>Please enter your name and email address to create your account</p>
     
<?php 
    if(isset($msg)){  // Check if $msg is not empty
        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
    } 
?>
     
<!-- start sign up form -->