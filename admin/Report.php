<?php
// Connect to the database (assuming you have a MySQL database set up)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $report_type = $_POST['report_type'];

    if ($report_type == "interview_feedback") {
        // Query to fetch interview feedback data from the database
        $sql = "SELECT * FROM interview_feedback";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Interview Feedback Report</h3>";
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['candidate_name'] . "</td><td>" . $row['feedback'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No feedback data available.";
        }
    } elseif ($report_type == "candidate_evaluations") {
        // Query to fetch candidate evaluations data from the database
        $sql = "SELECT * FROM candidate_evaluations";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Candidate Evaluations Report</h3>";
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['candidate_name'] . "</td><td>" . $row['evaluation'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No candidate evaluations data available.";
        }
    }

    // Close the database connection
    $conn->close();
}
?>