<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    // You can add additional validation and processing here

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or back to the contact page
    // header("Location: thank_you.html");
    exit();
}
?>


