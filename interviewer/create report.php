<?php

session_start();

// Assuming user ID is stored in the session after login
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    echo $_SESSION['use'];
    $us = $_SESSION['us'];
    echo $_SESSION['us'];
} else {
    die("User not logged in");
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "login_database";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, candidate_name, interview_date, interview_time, result FROM schedule WHERE interviewer_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $us);
$stmt->execute();
$result = $stmt->get_result();

echo "
    <style>
        table {
            text-align: center;
            width: 100%;
        }
    </style>
    <table border=1 align='center' bgcolor='yellow'>
        <tr>
            <th>Email</th>
            <th>Candidate Name</th>
            <th>Interview Date</th>
            <th>Interview Time</th>
             <th>result</th>
            <th>Update</th>
        </tr>";
        // <a href='add.php'>Add new candidate</a>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['email'] . "</td>
            <td>" . $row['candidate_name'] . "</td>
            <td>" . $row['interview_date'] . "</td>
            <td>" . $row['interview_time'] . "</td>
             <td>" . $row['result'] . "</td>
            <td><a href='edit.php?namba=" . $row['email'] . "'>Update</a></td>
        </tr>";
    }
} else {
    echo "<tr>
        <td colspan=6>No results</td>
    </tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
?>