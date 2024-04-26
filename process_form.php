<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: form.php?status=invalid_email");
        exit;
    }

    $to = "nassim.boussaid.csm@gmail.com";
    $subject = "New Contact Form Submission";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    if (mail($to, $subject, $email_message)) {
        header("Location: success.php?name=$name&email=$email&message=$message");
        exit;
    } else {
        header("Location: form.php?status=error");
        exit;
    }
} else {
    header("Location: form.php");
    exit;
}
?>