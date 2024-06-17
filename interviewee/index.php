<?php
/*session_start();

// Assuming user ID is stored in the session after login
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    echo $_SESSION['use'];
} else {
    header("Location: ../login.php");
    die("User not logged in");
}*/
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
    <h1>INTERVIEWEE PROFILE</h1>
</header>

<nav>
   
</nav>

<div class="container">
    <aside>

        <h2>INTERVIEW MANAGEMENT SYSTEM</h2>

        <ul>             
            <li><a href="update_profile.php" target="dashboard_content">interviewee-profile</a></li><br><br>
            <li><a href="cv.php" target="dashboard_content">send cv</a></li><br><br>
            <li><a href="schedule_i.php" target="dashboard_content">schedule_i</a></li><br><br>
                                         
            <li><a href="about1.html" target="dashboard_content">about us</a></li><br><br>
            <li><a href="contact1.html" target="dashboard_content">communicate </a></li><br><br>
            <!-- <li><a href="faq.html" target="dashboard_content">faq</a></li><br><br>              -->
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </aside>

    <section id="dashboard_content">
        <iframe src="about1.html" name="dashboard_content" width="100%" height="600px" frameborder="0"></iframe>
    </section>
</div>

<footer>
    <p>&copy; 2021 Recruitment Dashboard. All rights reserved.</p>
</footer>
</body>
</html>