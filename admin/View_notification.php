<?php
// Simulated data for demonstration
$interviews = array(
    array("candidate_email" => "candidate1@example.com", "interviewer" => "Interviewer A", "message" => "Message A", "selected_time_slot" => "9:00 AM - 10:00 AM", "status" => "Pending"),
    array("candidate_email" => "candidate2@example.com", "interviewer" => "Interviewer B", "message" => "Message B", "selected_time_slot" => "10:00 AM - 11:00 AM", "status" => "Confirmed"),
    // Add more interview data as needed
);

foreach ($interviews as $interview) {
    echo "<tr>";
    echo "<td>" . $interview["candidate_email"] . "</td>";
    echo "<td>" . $interview["interviewer"] . "</td>";
    echo "<td>" . $interview["message"] . "</td>";
    echo "<td>" . $interview["selected_time_slot"] . "</td>";
    echo "<td>Status: " . $interview["status"] . "</td>";
    echo "<td><a href='update_status.php?email=" . $interview["candidate_email"] . "'>Update Status</a></td>";
    echo "</tr>";
}
?>