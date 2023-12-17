<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your email address where you want to receive the messages.
    $to = "utkrishtsharma93@gmail.com";

    // Subject of your email.
    $subject = "Contact Form Submission from $name";

    // Compose the email message.
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email.
    if (mail($to, $subject, $message)) {
        echo "success"; // Return success message to the form.
    } else {
        echo "error"; // Return error message to the form.
    }
}
?>
