<?php     
$to_email = 'joelcrajudeveloper@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: joelcraju@gmail.com';
mail($to_email,$subject,$message,$headers);
?>
