<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



// Function to handle file upload
function uploadFile($fileInputName, $targetDir = "uploads/", $maxFileSize = 5000000, $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'])
{
    // Check if file is uploaded
    if (isset($_FILES[$fileInputName])) {
        $file = $_FILES[$fileInputName];

        // Define target file path
        $targetFile = $targetDir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk = 1;

        // Check if file already exists
        if (file_exists($targetFile)) {
            return "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size (default 5MB)
        if ($file["size"] > $maxFileSize) {
            return "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Check file type (ensure it's in the allowed list)
        if (!in_array($imageFileType, $allowedTypes)) {
            return "Sorry, only " . implode(", ", $allowedTypes) . " files are allowed.";
            $uploadOk = 0;
        }

        // If everything is ok, try to upload the file
        if ($uploadOk == 0) {
            return "Sorry, your file was not uploaded.";
        } else {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                // return "The file " . htmlspecialchars(basename($file["name"])) . " has been uploaded.";
                return htmlspecialchars(basename($file["name"]));
            } else {
                return "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        return "No file uploaded.";
    }
}




function sendEmail($user_email, $user_name, $user_message)
{
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vaibhavgupta0320@gmail.com'; // User email used to send the email
        $mail->Password = ''; // Use Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Receiver
        $mail->setFrom('vaibhavgupta0320@gmail.com', $user_name);
        $mail->addAddress('vg3997755@gmail.com'); // Company email to receive inquiries

        // Email Content
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
