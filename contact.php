<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    //
    mail("mohmrabie9@gmail.com", "Portfolio Contact Form", "Name: $name\nEmail: $email\nMessage: $message");

    //
    header("Location: index.html");
    exit();
}
?>
