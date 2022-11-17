

<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer();
   
    
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abc@gmail.com'; //enter email address of hosting site
    $mail->Password = 'password'; //enter email password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('abc@gmail.com','learnchess.online');  //enter email address of hosting site

    $mail->addAddress('learnchessonline64@gmail.com');

    $mail->isHTML(true);

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $course = $_POST['subject'];
    $msg = $_POST['msg'];
   

    $mail->Subject = 'Demo Class for'.$name;

    $bodyContent = '<p>Full Name: '.$name.
                    '<br>Student Age: '.$age. 
                    '<br>Email address: '.$email.
                    '<br>whatsapp Number: '.$number. 
                    '<br>Prefered course: '.$course.
                    '<br>Message: '.$msg;
                    
    $mail->Body = $bodyContent;
    if(!$mail->send())
    {
      
        echo "<script> alert('Form could not be submitted due to some error, Please try again later'); window.history.back(); </script>";
     
    }
    else
    {
      
        echo'<script type="text/javascript">alert("Form submitted successfully"); window.history.back();</script>';
        
    }

    ///////////Code to send the copy of mail to the customer//////////////////////////////
    
    $mail2 = new PHPMailer;

    $mail2->isSMTP();
    $mail2->Host = "smtp.gmail.com";
    $mail2->Username = "abc@gmail.com"; //enter the email address of hosting site within quotes
    $mail2->Password = "password"; //enter email password
    $mail2->SMTPAuth = true;
    $mail2->SMTPSecure = 'tls';
    $mail2->Port = 587;

    $mail2->setFrom('abc@gmail.com','learnchess.online'); //enter the email address of hosting site within quotes

    $mail2->addAddress($email);

    $mail2->isHTML(true);

    
    $mail2->Subject = "Automated reply from learnchess.online";
    $bodyContent = '<p>Thank you '.$name.' for contacting learnchess.online,
    we will get back to you shortly</p>';
    $mail2->Body = $bodyContent;
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