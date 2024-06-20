<?php
session_start();

// Assuming user ID is stored in the session after login
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    // echo $_SESSION['use'];
} else {
    die("User not logged in");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recruitment Dashboard</title>
<link rel="stylesheet" href="Dashboard.css">
</head>
<body>
<header>
    <h1>RECRUITMENT HIRING MANAGER</h1>
</header>

<nav>
    <!-- <ul>
        <li><a href="schedule_interview.html">Interview Schedule</a></li>
        <li><a href="Report.html">Generate Reports</a></li>
        <li><a href="#summary-view">Summary View</a></li>
        <li><a href="Interview_request.html">Create interview request</a></li>       
    </ul> -->

</nav>

<div class="container">
    <aside>

        <h2>INTERVIEW MANAGEMENT SYSTEM</h2>

        <ul>
        <!-- <li><a href="about1.html" target="dashboard_content">about us</a></li><br>  <br>   -->
            <li><a href="update_profile.php" target="dashboard_content">View Profile</a></li><br>  <br>    
            <li><a href="receive_cv.php" target="dashboard_content">receive_cv</li><br>  <br>       
            <li><a href="schedule.php" target="dashboard_content">schedule inter</a></li><br><br> 
            <li><a href="view report.php" target="dashboard_content">view report</a></li><br><br>
            <!-- <li><a href="Report.html" target="dashboard_content">Generate Reports</a></li><br><br> -->
            <!-- <li><a href="Interview_request.html" target="dashboard_content">Create interview request</a></li><br><br><br>
            <li><a href="Interviewer_selection.html" target="dashboard_content">Interviewer selection</a></li><br><br><br>   -->
            <!-- <li><a href="Time_slot.html" target="dashboard_content">Time slots</a></li><br><br>  -->
            <!-- <li><a href="Invitation.html" target="dashboard_content">Invitation</a></li><br><br> 
            <li><a href="Screeing_out.html" target="dashboard_content">Screening out</a></li><br><br>  -->
            <li><a href="Monitor.php"target="dashboard_content">Monitor interviewee</a></li><br><br> 
            <li><a href="Monitor2.php"target="dashboard_content">Monitor interviewer</a></li><br><br> 
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </aside>

    <section id="dashboard_content">
        <iframe src="about1.html" name="dashboard_content" width="100%" height="600px" frameborder="0"></iframe>
    </section>
</div>

 <footer>
    <p>&copy; 2024 interview management system. All rights reserved.</p>
</footer> 
</body>
</html>