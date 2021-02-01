

<?php
  
    // $name =" ";
    // $email =" ";
    // $message =" ";
    // $submit =" ";

    // $name = $_GET['sendersName'];
    // $message = $_GET['message'];
    // $email = $_GET['sendersEmail'];

  
    if(isset($_GET['submit'])){
        
        echo 'works';
        // var_dump($message);

        $name = $_GET['sendersName'];
        $email = $_GET['sendersEmail'];
        $message = $_GET['message'];
        $submit = $_GET['submitBtn'];

        $mailTo = str("bmo_32@hotmail.com");

        $subject = "Webfolio Message";

        $headers = "From: .$email\r\n";
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        $headers = "Reply-to: $email\r\n";

        mail($mailTo,$subject, $txt, $headers );
        header("Location: contact.html");

        $test = "this is a test";
           
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
   
    <?php echo "Thank You! $name" ?>
     <a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

     
</body>
</html>

