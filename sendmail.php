<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "nathan.schoeters@mail.com"; 
    $subject = "Form submission from: $name";
    $body = "You have received a new message from your website form.\n\n".
            "Name: $name\n".
            "Email: $email\n\n".
            "Message:\n$message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
//had er zelf een gemaakt had over het hoofd gezien dat die van het school verplicht was//