<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST['job_title'];
    $interview_type = $_POST['interview_type'];
    $candidate_name = $_POST['candidate_name'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
    $other_details = $_POST['other_details'];
    
    // You can perform further actions here such as saving the interview request to a database, sending notifications, etc.
    
    echo "Interview Request Created for $candidate_name for the position of $job_title. Interview Type: $interview_type. Date: $interview_date, Time: $interview_time. Other Details: $other_details";
}
?>