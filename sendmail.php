<?php
	if($_POST)
	{
		$name=Trim(stripslashes($_POST['name']));
		$email=Trim(stripslashes($_POST['email']));
		$phone=Trim(stripslashes($_POST['number']));
		$message=Trim(stripslashes($_POST['msg']));
        $EmailTo = $email;
        $Subject = "Enquiry from He The Men's Store Website";

        $Body = "";
        // prepare email body text
        $Body .= "<b>Name:&nbsp;&nbsp;</b> ";
        $Body .= $name ;
        $Body .= "<br>";
        $Body .= "<br>";
        $Body .= "<strong>Phone:&nbsp;&nbsp;</strong> ";
        $Body .= $phone ;
        $Body .= "<br>";
        $Body .= "<br>";
        $Body .= "<strong>Email:&nbsp;&nbsp;</strong>";
        $Body .= $email ;
        $Body .= "<br>";
        $Body .= "<br>";
        $Body .= "<strong>Enquiry:&nbsp;&nbsp;</strong>";
        $Body .= $message ;
        
       $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       
        $headers .= "From: dishirajani1999@gmail.com" . "\r\n";
        
        // send email 
        $success = mail($EmailTo, $Subject, $Body, $headers);

        // redirect to success page 
        if ($success){
         	echo "OK";  
        }    
	}	
?>