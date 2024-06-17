<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candidate_name = $_POST['candidate_name'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $interviewer_name = $_POST['interviewer_name'];
    
    // You can perform further actions here such as saving the interview request to a database, sending notifications, etc.
    
    echo "Interview Request Created for $candidate_name on $interview_date at $interview_time with Interviewer: $interviewer_name";
}
?>