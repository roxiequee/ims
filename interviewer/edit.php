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

if (isset($_GET['namba'])) {
    $id = $_GET['namba'];

    // Fetch current data
    $sql = "SELECT email, candidate_name, interview_date, interview_time, result FROM schedule WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        die("No data found for ID " . htmlspecialchars($id));
    }
    
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $candidate_name = $_POST['candidate_name'];
        $interview_date = $_POST['interview_date'];
        $interview_time = $_POST['interview_time'];
        $result = $_POST['result'];
        
        // Update data in the database
        $update_sql = "UPDATE schedule SET email=?, candidate_name=?, interview_date=?, interview_time=?, result=? WHERE email = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ssssss", $email, $candidate_name, $interview_date, $interview_time, $result, $id);
        
        if ($update_stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $update_stmt->close();
    }

    $stmt->close();
} else {
    die("No ID specified");
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        form {
            background-color: grey;
            margin-left: 4%;
            padding: 20%;
        }
    </style>
    <title>Edit Record</title>
</head>
<body>
    <form method="POST" action="edit.php?namba=<?php echo htmlspecialchars($id); ?>" autocomplete="off">
        <label for="email">EMAIL:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" readonly><br><br>
        <label for="candidate_name">Candidate Name:</label><br>
        <input type="text" id="candidate_name" name="candidate_name" value="<?php echo htmlspecialchars($row['candidate_name']); ?>" readonly><br><br>

        <label for="interview_date">Interview Date:</label><br>
        <input type="date" id="interview_date" name="interview_date" value="<?php echo htmlspecialchars($row['interview_date']); ?>" readonly><br><br>

        <label for="interview_time">Interview Time:</label><br>
        <input type="time" id="interview_time" name="interview_time" value="<?php echo htmlspecialchars($row['interview_time']); ?>" readonly><br><br>

        <label for="result">Result:</label><br>
        <select name="result" id="result">
            <option value="on progress" <?php echo $row['result'] == 'on progress' ? 'selected' : ''; ?>>on progress</option>
            <option value="pass" <?php echo $row['result'] == 'pass' ? 'selected' : ''; ?>>pass</option>
            <option value="failed" <?php echo $row['result'] == 'failed' ? 'selected' : ''; ?>>failed</option>
        </select><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>