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
    <h1>INTERVIEWER-PROFILE</h1> 
</header>

<!-- <nav>
      <ul>
        <li><a href="schedule_interview.html">Interview Schedule</a></li>
        <li><a href="Report.html">Generate Reports</a></li>
        <li><a href="#summary-view">Summary View</a></li>
        <li><a href="Interview_request.html">Create interview request</a></li>
       
    </ul> -->
</nav>  

          

<div class="container">
    <aside>

        <h2 >INTERVIEW MANAGEMENT SYSTEM </h2>
        <ul>
            <!-- <li><a href="about1.html" target="dashboard_content">about us</a></li><br><br>  -->
            <li><a href="update_profile.php" target="dashboard_content">interviewer-profile</a></li><br><br> 
            <li><a href="create report.php" target="dashboard_content">create report</a></li><br><br> 
            <li><a href="scheduleinterface.php" target="dashboard_content">sheduling-iinterface</a></li><br> <br>
            <!-- <li><a href="instr.html" target="dashboard_content">instruction</a></li><br><br>  -->
            <!-- <li><a href="../group-video-chat/index.html" target="dashboard_content">live</a></li><br><br>                -->
            <li><a href="tar.html" target="dashboard_content">interviewee-information</a></li><br><br> 
            <li><a href="contact1.html" target="dashboard_content">concat us</a></li><br><br>
            <!-- <li><a href="help.htm" target="dashboard_content">help</a></li><br><br>  -->
            <li><a href="logout.php">Logout</a></li>             
        </ul>

    </aside>

    <section id="dashboard_content">
        <iframe src="about1.html" name="dashboard_content" width="100%" height="600px" frameborder="0"></iframe>
    </section>
</div>

 <footer>
    <p>&copy; 2024 interview management system . All rights reserved.</p>
</footer> 
</body>
</html>