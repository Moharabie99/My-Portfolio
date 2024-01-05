<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email to your Gmail address
    mail("mohamrabie9@gmail.com", "Portfolio Contact Form", "Name: $name\nEmail: $email\nMessage: $message");

    // Redirect to the homepage after sending the email
    header("Location: index.html");
    exit();
}
?>
