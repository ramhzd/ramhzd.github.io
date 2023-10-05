<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Construct the subject line
    $subject = "Portfolio/Professional Website Contact";
    
    // Construct the email message
    $email_message = "Name: $first_name $last_name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";
    
    // Replace with your email address
    $to = "ramhzd@umsystem.edu";
    
    // Send the email
    mail($to, $subject, $email_message);
    
    // Redirect back to the contact page or a thank you page
    header("Location: thankyou.html");
} else {
    // Handle invalid access or other cases here
    echo "Invalid access.";
}
?>

