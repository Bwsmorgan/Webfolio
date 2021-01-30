<?php

    if(isset[$submit]){

        $name = $_GET["sendersName"];
        $email = $_GET["sendersEmail"];
        $message = $_GET["message"];
        $submit = $GET["submitBtn"];

        $mailTo = "bmo_32@hotmail.com";

        $subject = "Webfolio Message";

        $headers = "From: .$email\r\n";
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        $headers = "Reply-to: $email\r\n";

        mail($mailTo,$subject, $txt, $headers );
        header("Location: contact.html");
    }

?>