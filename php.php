<?php

$name =$_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'maneom407@gmail.com';
$email_subject = "New Form Submit";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n"
                "User Message: $message.\n";

$to = "ommane75@gmail.com";

$heaters = "From; $email_from \r\n";

$heaters = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$heaters);

header("Location: Contact_us.html");

?>