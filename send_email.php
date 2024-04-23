<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $message = $_POST['message'];

    // echo("Tommy är bäst!");
    // echo($firstname);
    // echo($lastname);
    // echo($message);
    // exit;
    // Set your email address here
    $to = 'mahdimousavi8909@gmail.com';

    // Email subject and message
    $subject = 'Contact Form Submission';
    $email_message = "First Name: $firstname\nLast Name: $lastname\n\nMessage:\n$message";

    // Additional headers
    $headers = "From: $firstname $lastname <no-reply@example.com>";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        header('Location: contact.html?status=success');
        exit;
    } else {
        // Error sending email
        //header('Location: contact.html?status=error');
        print_r(error_get_last());
        exit;
    }
} else {
    // Redirect back to the contact page if accessed directly
    header('Location: contact.html');
    exit;
}
?>
