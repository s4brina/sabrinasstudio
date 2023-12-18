<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Basic form validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields";
        exit;
    }

    // Process the form data (you can add your specific functionality here)

    // Example: Sending an email
    $to = "sabrina.bridget@outlook.com";
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $email_body)) {
        echo "Email sent successfully";
        // Redirect after form submission (optional)
        header("Location: thank-you.html");
        exit;
    } else {
        echo "Email failed to send";
    }
}
?>
