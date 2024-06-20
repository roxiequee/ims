<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_database";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, password, role, email FROM interviewer_table";
$result = $conn->query($sql);

echo "
<!DOCTYPE html>
<html lang='en' class='html'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title class='title'>Interviewer Table</title>
    <style>
        
    </style>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='../css/Monitor.css'>

</head>
<body class='body'>
<div class='header'>
    <h2 class='h2'>Interviewer Table</h2>
   <h3 class='h3'> interview details</h3>
    <p class='p'>
    <a href='add1.php' class='action-link'>
    Add New Candidate
    </a>
    </p>
</div>
<div class='container'>
    <table class='table'>
        <tr class='tr'>
            <th class='th'>ID</th>
            <th class='th'>Username</th>
            <th class='th'>Password</th>
            <th class='th'>Email</th>
            <th class='th'>Role</th>
            <th class='th'>Action</th>
            <th class='th'>Update</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='tr'>
                <td class='td'>{$row['id']}</td>
                <td class='td'>{$row['username']}</td>
                <td class='td'>{$row['password']}</td>
                <td class='td'>{$row['email']}</td>
                <td class='td'>{$row['role']}</td>
                <td class='td'><a href='deletee.php?namba={$row['id']}' class='action-link'>Delete</a></td>
                <td class='td'><a href='edit1.php?namba={$row['id']}' class='action-link'>Update</a></td>
              </tr>";
    }
} else {
    echo "<tr class='tr'>
            <td class='td' colspan='7'>No results found</td>
          </tr>";
}

echo "</table>
</div>
</body>
</html>";

$conn->close();
