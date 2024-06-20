<!DOCTYPE html>
<html>
    <head>
        <title>Online Interview Management System</title>
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
            .action-link {
                color: #4CAF50;
                text-decoration: none;
                font-weight: bold;
            }
            h2, h3 {
                text-align: center;
            }
            h3 {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <h3>Welcome for your schedule, we're here for you to successfully</h3>
        <p>Get prepared for the interview</p>
        <?php
        session_start();

        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user'];
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

        $sql = "SELECT email, candidate_name, interview_date, interview_time FROM schedule WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // echo $user_id;
            echo "<table>";
            echo "<tr><th>Email</th><th>Candidate Name</th><th>Interview Date</th><th>Interview Time</th><th>Action</th></tr>";

            date_default_timezone_set('Africa/Nairobi');
            $current_time = new DateTime();

            while ($row = $result->fetch_assoc()) {
                $interview_datetime = DateTime::createFromFormat('Y-m-d H:i', $row["interview_date"] . " " . $row["interview_time"]);

                if ($interview_datetime !== false) {
                    $interval = $current_time->diff($interview_datetime);
                    $interval_minutes = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;

                    $end_interview_time = clone $interview_datetime;
                    $end_interview_time->modify('+10 minutes');

                    $action = "";

                    if ($current_time < $interview_datetime) {
                        $action = "Wait for your interview date and time.";
                    } elseif ($current_time >= $interview_datetime && $current_time <= $end_interview_time) {
                        if ($interval_minutes <= 5) {
                            $action = "<a href=\"../group-video-chat/index.php\" target=\"dashboard_content\" class=\"action-link\">Join Live Interview</a>";
                        } else {
                            $action = "You are late for the interview.";
                        }
                    } else {
                        $action = "You are late for the interview.";
                    }

                    echo "<tr><td>" . $row["email"] . "</td><td>" . $row["candidate_name"] . "</td><td>" . $row["interview_date"] . "</td><td>" . $row["interview_time"] . "</td><td>" . $action . "</td></tr>";
                } else {
                    echo "<tr><td>" . $row["email"] . "</td><td>" . $row["candidate_name"] . "</td><td>" . $row["interview_date"] . "</td><td>" . $row["interview_time"] . "</td><td>Invalid date and time format</td></tr>";
                }
            }
            echo "</table>";
        } else {
            echo "<p>No results found</p>";
        }

        $conn->close();
        ?>
    </body>
</html>