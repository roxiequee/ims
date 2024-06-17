<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $candidate_email = $_POST["candidate_email"];
    $interviewer = $_POST["interviewer"];
    $message = $_POST["message"];
    $selected_time_slot = $_POST["available_times"];
    
    // Send email notification to candidate
    $to = $candidate_email;
    $subject = "Interview Invitation";
    $body = "Dear Candidate,\n\nYou have been invited for an interview with $interviewer.\n\nMessage: $message\n\nPlease select an available time slot for your interview: $selected_time_slot";
    $headers = "From: your_email@example.com";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Interview invitation sent successfully to $candidate_email.";
    } else {
        echo "Failed to send interview invitation. Please try again.";
    }
}
?>