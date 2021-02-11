<?php 

include '/Applications/MAMP/htdocs/config.php';

use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['submit'])){

    $name = $_POST['sendersName'];
    $email = $_POST['sendersEmail'];
    $message = $_POST['message'];

    $mail = new PHPMailer();

    $alert = '';

    //SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = false; 
    $mail->Username = $myEmail; 
    $mail->Password = $myPassword;
    $mail->Port = 587; //465
    $mail->SMTPSecure = false; "tls"; //ssl

    //EMAIL SETTINGS
    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addReplyTo($email, $name);
    $mail->addAddress($myEmail, $myName);
    $mail->Subject = 'New Webfolio Message!';
    $mail->Body = $message;

    
    if ($mail->Send()) {

        $alert = '<div class="alertEmailSuccess">
                        <span> Message Sent! </span>
                    </div>';

        header("refresh:3;url=contactPage.php");
    } 

        elseif (!$mail->Send()) {

        $alert = '<div class="alertEmailFail">
                        <span> Error! Message did not send. </span>
                    </div>';

        header("refresh:3;url=contactPage.php");
    } 

}
?>