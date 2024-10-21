<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (isset($name) && isset($email) && isset($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Thank you for your message, $name. We will get back to you shortly.";
        } else {
            echo "Invalid email address. Please try again.";
        }
    } else {
        echo "Please fill out all required fields.";
    }
}
?>
