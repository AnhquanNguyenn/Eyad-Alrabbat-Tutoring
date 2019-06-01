<?php
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    $mailTo = "ea72014@yahoo.com";
    $emailBody = "Name: $name.\n".
                 "Phone Number: $phone.\n".
                 "Email: $mailFrom.\n".
                 "Subject: $subject.\n".
                 "Message: $message.\n";

    $headers = "From: $mailTo \r\n";
    $headers .= "Reply-To: $mailFrom \r\n";

    mail($mailTo, $subject, $emailBody, $headers);

    header("Location: index.html");
?>


