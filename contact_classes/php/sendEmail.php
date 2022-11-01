<?php

//Replace this with your own email address
$to = 'joelcrajudeveloper@gmail.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   //$contact_message = trim(stripslashes($_POST['message']));
   $age = trim(stripslashes($_POST['age']));
   $whatsapp = trim(stripslashes($_POST['number']));

   
	if ($subject == '') { $subject = "Contact Form Submission"; }

   // Set Message
   $message .= "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= nl2br($subject);
   $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   ini_set("sendmail_from", $to); // for windows server
   $mail = mail($to, $subject, $message, $headers);

	if ($mail) { echo "OK"; }
   else { echo "Something went wrong. Please try again."; }

}

// $to = "joelcrajudeveloper@gmail.com";
// $subject = "This is subject";

// $message = "<b>This is HTML message.</b>";
// $message .= "<h1>This is headline.</h1>";

// $header = "From:abc@somedomain.com \r\n";
// $header .= "Cc:afgh@somedomain.com \r\n";
// $header .= "MIME-Version: 1.0\r\n";
// $header .= "Content-type: text/html\r\n";

// $retval = mail ($to,$subject,$message,$header);

// if( $retval == true ) {
//    echo "Message sent successfully...";
// }else {
//    echo "Message could not be sent...";
// }

?>