<?php
session_start();

// Assuming user ID is stored in the session after login
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
} else {
    die("User not logged in");
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "login_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all schedules
$sql = "SELECT email, candidate_name, interview_date, interview_time, result FROM schedule";
$result = $conn->query($sql);

echo "
<style>
    :root {
        --bg-color: #050C9C;
        --secondary-color: #6DC5D1;
        --text-color: #151515;
    }
    table {
        text-align: center;
        width: 100%;
        background-color: var(--secondary-color);
    }
</style>
<table border=1 align='center' bgcolor='yellow'>
    <tr>
        <th>Email</th>
        <th>Candidate Name</th>
        <th>Interview Date</th>
        <th>Interview Time</th>
        <th>Result</th>

    </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . htmlspecialchars($row['email']) . "</td>
            <td>" . htmlspecialchars($row['candidate_name']) . "</td>
            <td>" . htmlspecialchars($row['interview_date']) . "</td>
            <td>" . htmlspecialchars($row['interview_time']) . "</td>
            <td>" . htmlspecialchars($row['result']) . "</td>
            </tr>";
    }
} else {
    echo "<tr>
        <td colspan=6>No results</td>
    </tr>";
}

echo "</table>";

$conn->close();
?>