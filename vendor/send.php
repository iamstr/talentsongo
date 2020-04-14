<?php
ob_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require '../vendor/autoload.php';


if(isset($_POST['mail'])){
    
    



$contact_email=$_POST['volunteer'];


if(!empty($contact_email)){
    
    
   
                    
                    
                    
                    
                    
                    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 4;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.talentsongo.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'm.abdisatar@talentsongo.org';                 // SMTP username
    $mail->Password = 'ZKLcEH%zE{0[';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;// TCP port to connect to
    
    
    
    $mail->setFrom($contact_email,"satar");
    
    
    $mail->addAddress("asatar1994@gmail.com");
$mail->addReplyTo("asatar1994@gmail.com", "satar");
    
   
    //Recipients
   

    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "volunteer";
    $mail->Body    = 
        
        
        
        
        
"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Document</title>
</head>
<body>
    <p>volunteer email. `$contact_email`.</p>
    
    
</body>
</html>";
    $mail->AltBody = $contact_email;

    $mail->send();
//    echo 'Message has been sent';
    header("location: ../index.php");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
             
    
    
    
    
    
}

}
























?>

