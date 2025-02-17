<?php

// Function to handle file upload
function uploadFile($fileInputName, $targetDir = "uploads/", $maxFileSize = 5000000, $allowedTypes = ['jpg', 'jpeg', 'png', 'gif']) {
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

?>
