<?php
session_start(); // Start session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$upload_dir = 'uploaded_pdfs/'; // Destination directory for PDF uploads
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true); // Create directory if it doesn't exist
}

$message = [];

// Validate if user exists in the interviewee_table before processing file upload
$sql_user_check = "SELECT id FROM interviewee_table WHERE id = $user_id";
$user_result = $conn->query($sql_user_check);

if ($user_result->num_rows == 0) {
    $message[] = 'Invalid user ID! User does not exist.';
    $conn->close(); // Close database connection
    exit();
}

if (isset($_POST['submit'])) {
    // File Handling
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];

    $allowed_types = ['image/jpeg', 'image/png', 'application/pdf'];
    $max_file_size = 5000000; // 5 MB max file size

    // Check if file type is allowed
    if (!in_array($file_type, $allowed_types)) {
        $message[] = 'Invalid file type! Only images (.jpg, .jpeg, .png) and PDFs (.pdf) are allowed.';
    } elseif ($file_size > $max_file_size) {
        $message[] = 'File size is too large!'; // Notify user about file size limit
    } else {
        $destination_file_path = $upload_dir . $file_name;

        // Check if file with the same name already exists in database
        $sql_check_duplicate = "SELECT id FROM uploads WHERE filename = '$file_name' AND id = $user_id";
        $duplicate_result = $conn->query($sql_check_duplicate);

        if ($duplicate_result->num_rows > 0) {
            echo "  this file is already exist";
        } 
        else {
            // Move file to destination directory
            if (move_uploaded_file($file_tmp_name, $destination_file_path)) {
                // Insert file information into the database
                $sql = "INSERT INTO uploads (filename, type, id) VALUES ('$file_name', '$file_type', $user_id)";
                 if($user_id > 0 ){
                     echo " no entry";
                //     exit();
                 }
                if ($duplicate_result->num_rows > 0) {
                    echo "This file is already exist";
                } 
                if ($conn->query($sql) === TRUE) {
                    $message[] = 'File uploaded and recorded successfully!'; // Notify user about successful upload and database storage
                } else {
                    $message[] = 'Failed to record file in database. Please try again later.'; // Database error handling
                }
            } else {
                $message[] = 'File upload failed!'; // Notify user about unsuccessful upload
            }
        }
    }
}

$conn->close(); // Close database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="mak.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
</head>
<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Upload File</h3>
            <?php
            if (!empty($message)) {
                foreach ($message as $msg) {
                    echo '<div class="message">' . $msg . '</div>'; // Display messages to user
                }
            }
            ?>
            <input type="file" name="file" class="box" accept=".jpg, .jpeg, .png, .pdf" required>  
            <input type="submit" name="submit" value="Upload File" class="btn">
        </form>
    </div>
</body>
</html>
