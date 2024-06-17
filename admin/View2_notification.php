<?php
// Simulated data for demonstration
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    // Update the status of the interview with the given email
    // Add your update logic here (e.g., changing status from Pending to Confirmed)
    // Redirect back to the interview schedule management page
    header("Location: interview_schedule_management.html");
    exit();
}
?>