<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email address
        echo "Invalid email address. Please go back and correct it.";
        exit;
    }

    // Recipient email address
    $to = "ramhzd@umsystem.edu"; // Replace with your recipient's email address

    // Subject line
    $subject = "Portfolio/Professional Website Contact";

    // Email content
    $emailContent = "First Name: $firstName\n";
    $emailContent .= "Last Name: $lastName\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Accessing this script directly is not allowed
    header("HTTP/1.0 403 Forbidden");
    echo "Access Forbidden";
}
?>
