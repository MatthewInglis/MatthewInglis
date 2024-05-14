<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "matthewcinglis@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    

    mail($to, $subject, $message, $headers);
    
    echo "<p>Your message has been sent successfully!</p>";
}
?>