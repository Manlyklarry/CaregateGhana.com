<?php
 $name = $-POST['name'];
 $visitor_email = $_POST['email']; 
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $email_from = 'caregateghana.com';
 
 $email_subject = 'New Form Submission';

 $email_body = "User Name: $name.\n".
               "User Email: $Visitor_email.\n".
               "subject: $subject.\n".
               "User Message: $Visitor_email.\n"; 


  $to = 'caregategh@gmail.com'; 

  $headers = "From: $email_form\r\n";  
  
  $headers .="Reply-To:  $visitor_email\r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("location. contact.html");
   

?>

