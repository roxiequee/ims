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
    <h1>INRERVIEWEE PROFILE</h1>
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
            <li><a href="profile.php" target="dashboard_content">interviewee-profile</a></li><br><br>
            <li><a href="schedule_i.php" target="dashboard_content">schedule_i</a></li><br><br>
                                                 
            <li><a href="about.php" target="dashboard_content">about us</a></li><br><br>
            <li><a href="faq.php" target="dashboard_content">faq</a></li><br><br>             
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </aside>

    <section id="dashboard_content">
        <iframe src="schedule_interview.html" name="dashboard_content" width="100%" height="600px" frameborder="0"></iframe>
    </section>
</div>

<footer>
    <p>&copy; 2021 Recruitment Dashboard. All rights reserved.</p>
</footer>
</body>
</html>