<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script>
    swal("heyyy");
</script>
<?php
    //define('CDN', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer();
    //$mail->SMTPDebug = 5;
    
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joelcrajudeveloper@gmail.com';
    //$mail->Password = 'theholybible';
    $mail->Password = 'ijqnzsxenlwoyhtv';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('joelcrajudeveloper@gmail.com','learnchess.online');

    $mail->addAddress('joelcrajudeveloper@gmail.com');

    $mail->isHTML(true);

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $course = $_POST['subject'];
    $msg = $_POST['msg'];
   

    $mail->Subject = 'Demo Class for'.$name;

    //$bodyContent = '<h1>How to send email from localhost using php</h1>'.$name;
    $bodyContent = '<p>Full Name: '.$name.
                    '<br>Student Age: '.$age. 
                    '<br>Email address: '.$email.
                    '<br>whatsapp Number: '.$number. 
                    '<br>Prefered course: '.$course.
                    '<br>Message: '.$msg;
                    
    $mail->Body = $bodyContent;
    //$mail->send();
    if(!$mail->send())
    {
        //echo 'message could not be sent'.$mail->ErrorInfo;
        echo "<script> window.history.back(); alert('Form could not be submitted due to some error, Please try again later');</script>";
        // echo "<h1>".$bodyContent."</h1>". $mail->ErrorInfo;
    }
    else
    {
        //echo 'message has been sent';
        echo'<script type="text/javascript">  window.history.back(); alert("Form submitted successfully"); </script>';
        
    }

    ///////////Code to send the copy of mail to the customer//////////////////////////////
    
    $mail2 = new PHPMailer;

    $mail2->isSMTP();
    $mail2->Host = "smtp.gmail.com";
    $mail2->Username = "joelcrajudeveloper@gmail.com";
    $mail2->Password = "ijqnzsxenlwoyhtv";
    $mail2->SMTPAuth = true;
    $mail2->SMTPSecure = 'tls';
    $mail2->Port = 587;

    $mail2->setFrom('joelcrajudeveloper@gmail.com','learnchess.online');

    $mail2->addAddress($email);

    $mail2->isHTML(true);

    
    $mail2->Subject = "Automated reply from learnchess.online";
    $bodyContent = '<p>Thank you '.$name.' for contacting learnchess.online,
    we will get back to you shortly</p>';
    $mail2->Body = $bodyContent;
    //$mail2->send();
    if(!$mail2->send())
    {
        //echo "<script> window.history.back(); alert('Form could not be submitted due to some error, Please try again later');</script>";
    }
    else
    {
        //echo'<script type="text/javascript">  window.history.back(); alert("Form submitted successfully"); </script>';
        
    }


    

?>

<script>
    function success(){
        alert('inside success');
    }
</script>