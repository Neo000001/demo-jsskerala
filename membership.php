<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Destination email (Zoho)
    $to = "contact@eebii.com";
    $subject = "New Membership Submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: contact@eebii.com";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "✅ Thank you, $name! Your membership request has been submitted.";
    } else {
        echo "❌ Sorry, there was an error sending your membership request.";
    }
}
?>
