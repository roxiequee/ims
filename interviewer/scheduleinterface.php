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
            padding-bottom: 50px;
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
        $us = $_SESSION['us'];
        echo $_SESSION['user'];
        echo $_SESSION['us'];
    } else {
        die("User not logged in");
    }

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "login_database";

  
    $conn = new mysqli($server, $user, $pass, $db);

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT email, candidate_name, interview_date, interview_time FROM schedule WHERE interviewer_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $us); 
    $stmt->execute(); 
    $result = $stmt->get_result(); 

   
    date_default_timezone_set('Africa/Nairobi');
    $current_time = new DateTime();

   
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Email</th><th>Candidate Name</th><th>Interview Date</th><th>Interview Time</th><th>Live Link</th></tr>";
    
        while ($row = $result->fetch_assoc()) {
            $interview_datetime = new DateTime($row["interview_date"] . ' ' . $row["interview_time"]);
            $is_live = $current_time >= $interview_datetime && $current_time <= (clone $interview_datetime)->modify('+30 minutes');

            echo "<tr><td>" . $row["email"] . "</td><td>" . $row["candidate_name"] . "</td><td>" . $row["interview_date"] . "</td><td>" . $row["interview_time"] . "</td><td>";

            if ($is_live) {
                echo '<a href="../group-video-chat/index.php" target="_blank" class="action-link">Join Live Interview</a>';
            } else {
                echo 'Not yet live';
            }

            echo "</td></tr>";
        }
        echo "</table>";
    } 

    // Close connection
    $conn->close();
    ?>
</div>
</body>
</html>