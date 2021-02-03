<?php

use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_GET['submit'])){
    
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    
    $name = $_GET['sendersName'];
    $email = $_GET['sendersEmail'];
    $message = $_GET['message'];

    $mail = new PHPMailer();

    //SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'email'; 
    $mail->Password = 'password';
    $mail->Port = 587; //465
    $mail->SMTPSecure = "tls"; //ssl

    //EMAIL SETTINGS
    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addReplyTo($email, $name);
    $mail->addAddress('bwsmorgan@gmail.com', 'Brendan Morgan');
    $mail->Subject = 'Test Email via gmail SMTP using PHPMailer';
    $mail->Body = $message;
    $mail->Send();


    // if($mail->Send()){
    //    echo 'Email is sent!';
    // }
    // else{
    //     echo 'Error, something is wrong' . $mail->ErrorInfo;
    // }
    smtpClose();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./contact.html"></a>
</body>
</html>
