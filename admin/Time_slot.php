<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $interviewer = $_POST['interviewer'];
    $day = $_POST['day'];
    $time_slots = $_POST['time_slots'];
    
    // Store the available time slots in a database or any other storage mechanism
    
    echo "Available time slots for $interviewer on $day:<br>";
    foreach ($time_slots as $slot) {
        echo "$slot<br>";
    }
}
?>