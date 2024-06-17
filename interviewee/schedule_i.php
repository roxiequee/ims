<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            color: #333;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: blue;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .header {
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
        }
        .action-link {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="header">
    <h2>Interview Schedule</h2>
    <p>Here we can help you prepare</p>
</div>
<div class="container">

    <?php
    session_start();

    // Assuming user ID is stored in the session after login
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user'];
    } else {
        die("User not logged in");
    }

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

    // Prepare the SQL statement
    $sql = "SELECT email, candidate_name, interview_date, interview_time FROM schedule WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_id); // Bind the parameter
    $stmt->execute(); // Execute the statement
    $result = $stmt->get_result(); // Get the result

    // Check if there are records in the result
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Email</th><th>Candidate Name</th><th>Interview Date</th><th>Interview Time</th><th>Action</th></tr>";

        // Set timezone to Africa/Nairobi
        date_default_timezone_set('Africa/Nairobi');

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $interview_datetime = $row["interview_date"] . " " . $row["interview_time"];
            $interview_time = DateTime::createFromFormat('Y-m-d h:i A', $interview_datetime);
            if ($interview_time === false) {
                echo "<tr><td colspan='5'>Error parsing datetime: " . htmlspecialchars($interview_datetime) . "</td></tr>";
                continue;
            }

            $current_time = new DateTime();
            $interval = $current_time->diff($interview_time);
            $interval_minutes = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;

            // Calculate end time of the interview
            $end_interview_time = clone $interview_time;
            $end_interview_time->modify('+10 minutes');

            $action = "";
            if ($current_time < $interview_time) {
                $action = "Wait for your interview date and time.";
            } elseif ($current_time >= $interview_time && $current_time <= $end_interview_time && $interval_minutes <= 5) {
                $action = "<a href='../group-video-chat' target='_blank' class='action-link'>Join Interview</a>";
            } elseif ($current_time > $end_interview_time) {
                $action = "You are late for the interview.";
            } else {
                $action = "You are late for the interview.";
            }

            echo "<tr><td>" . $row["email"] . "</td><td>" . $row["candidate_name"] . "</td><td>" . $row["interview_date"] . "</td><td>" . $row["interview_time"] . "</td><td>" . $action . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found</p>";
    }

    // Close connection
    $conn->close();
    ?>
</div>
</body>
</html>