<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Directory where the file will be uploaded
$target_dir = "uploads/";
// The path of the file to be uploaded
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// Variable to check if upload is valid
$uploadOk = 1;

// Get the file extension
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is an actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (e.g., limit to 500KB)
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Insert file info into database
        $filename = basename($_FILES["fileToUpload"]["name"]);
        $filepath = $target_file;

        $sql = "INSERT INTO uploads (filename, filepath) VALUES ('$filename', '$filepath')";

        if ($conn->query($sql) === TRUE) {
            echo "The file ". htmlspecialchars( $filename). " has been uploaded and saved in the database.";
        } else {
            echo "Sorry, there was an error saving file information to the database.";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Close the database connection
$conn->close();
?>