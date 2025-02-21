<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // PHPMailer लोड करें

$config = include('config.php'); // SMTP Config load करें

function sendEmail($user_email, $user_name, $user_message, $config)
{
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username']; // आपकी कंपनी का Gmail
        $mail->Password = $config['smtp_password']; // Gmail का App Password
        $mail->SMTPSecure = $config['smtp_secure'];
        $mail->Port = $config['smtp_port'];

        // Email Sender (Company Email से भेजा जाएगा)
        $mail->setFrom($config['smtp_username'], 'Website Inquiry');
        $mail->addReplyTo($user_email, $user_name); // ताकि company direct user को reply कर सके
        $mail->addAddress($config['company_email']); // Email जहां मेल जाना है

        // Email Subject and Body
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from " . $user_name;
        $mail->Body = "
        <html>
        <head><title>Contact Form Submission</title></head>
        <body>
            <h3>New Inquiry from $user_name</h3>
            <p><strong>Email:</strong> $user_email</p>
            <p><strong>Message:</strong> $user_message</p>
        </body>
        </html>";

        // Send Email
        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (sendEmail($email, $name, $message, $config)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>

<!-- HTML Form -->
<form method="POST" action="">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <textarea name="message" placeholder="Your Message" required></textarea><br>
    <button type="submit">Submit</button>
</form>
