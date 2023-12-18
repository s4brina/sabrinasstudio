<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform additional validation or processing here

    // For example, you might send an email with the form data
    $to = "sabrinasstudio.com@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Set additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect after submission (optional)
    header("Location: thank-you.html"); // Replace with your thank-you page
    exit();
}
?>
