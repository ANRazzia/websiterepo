<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "nathan.schoeters@gmail.com";
    $subject = "Nieuw bericht van contactformulier";
    $body = "Naam: $name\nEmail: $email\n\nBericht:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Bericht succesvol verzonden!";
    } else {
        echo "Er ging iets mis bij het verzenden...";
    }
}
?>