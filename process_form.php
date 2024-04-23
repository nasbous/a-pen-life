<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "nassim.boussaid.csm@gmail.com";
    
    $subject = "New Contact Form Submission";
    
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    if (mail($to, $subject, $email_message)) {

        header("Location: index.html?status=success");
    } else {

        header("Location: index.html?status=error");
    }
} else {

    header("Location: index.html");
}
?>
