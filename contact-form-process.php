<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate inputs and send email
    if (!empty($name) && !empty($email) && !empty($message)) {
        mail("youremail@example.com", "Contact Form Submission", $message, "From:" . $email);
        echo "Message sent!";
    } else {
        echo "All fields are required.";
    }
}
?>
