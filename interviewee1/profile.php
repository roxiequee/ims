<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
    header("Location: home.php");
    exit();
}

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "login_database";

$conn = mysqli_connect($servername, $username, $password, $database); 
if(!$conn){
    echo "Failed to connect to database";
    exit(); 
}

$email = $_SESSION['email'];
$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];

$sql = "";
if($role === 'interviewee'){
    $sql = "SELECT * FROM interviewee_table WHERE id = '$user_id'";
} elseif($role === "admin"){
    $sql = "SELECT * FROM admin_table WHERE id = '$user_id'";
} elseif($role === "interviewer"){
    $sql = "SELECT * FROM interviewer_table WHERE id = '$user_id'";
}

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}

$user = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .profile-container h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>User Profile</h1>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <p><strong>Role:</strong> <?php echo htmlspecialchars($role); ?></p>
        <!-- Add other profile details as needed -->
    </div>
</body>
</html>