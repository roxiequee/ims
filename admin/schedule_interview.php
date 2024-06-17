<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "login_database";


// Create connection
$conn = new mysqli($server, $user, $pass, $db);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize POST data
    $id = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $candidate_name = filter_var($_POST['candidate_name'], FILTER_SANITIZE_STRING);
    $interview_date = filter_var($_POST['interview_date'], FILTER_SANITIZE_STRING);
    $interview_time = filter_var($_POST['interview_time'], FILTER_SANITIZE_STRING);
    $interviewer_time = filter_var($_POST['interviewer_number'], FILTER_SANITIZE_STRING);


    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM schedule WHERE interviewer_number = ?");
    if ($stmt) {
        $stmt->bind_param("s", $interviewer_number);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "The candidate is already scheduled.";
        } else {
            // Prepare and bind for insertion
            $stmt = $conn->prepare("INSERT INTO schedule (interviewer_number,email,candidate_name, interview_date, interview_time) VALUES (?, ?, ?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sssss", $interviewer_time, $id, $candidate_name, $interview_date, $interview_time);

                if ($stmt->execute()) {
                    echo "Interview Scheduled for $candidate_name on $interview_date at $interview_time";
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo "Error preparing insert statement: " . $conn->error;
            }
        }

        // Close the select statement
        $stmt->close();
    } else {
        echo "Error preparing select statement: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>