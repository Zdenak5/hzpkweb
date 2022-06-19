<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /*  div:last-child { display:none;}  */
</style>

</head>
<body>
<?php
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['nazor'];

	
// Create the email and send the message
//$to = 'hubalek.zdenek.05@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Pošta z webu UPCE:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage: $message\n\n";
$headers = "From: odesilatel@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
if(mb_send_mail($to,$email_subject,$email_body,$headers))
    {
        echo "Email byl úspěšně odeslán";
        return true;
    }
    else {
        echo "Email se nepodařilo odeslat";
    }			
?>
</body>
</html>