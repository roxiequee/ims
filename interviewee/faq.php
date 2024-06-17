
<?php
session_start();

// Assuming user ID is stored in the session after login
if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    echo $_SESSION['use'];
} else {
    die("User not logged in");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FQA</title>
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="indexes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<!-- <body>
    <aside class="header">
        <div class="profile-picture">
            <img src="https://images.unsplash.com/photo-1712249764665-15da106b4be8?q=80&w=388&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Profile Picture">
            <div class="profile-name">
                <h3>
                    rozina mbele
                    </h2>
            </div>
        </div>


        <div class="aside-wrapper">
            <ul class="navigation-menu">
                <li>
                    <a href="#">
                        <ion-icon name="home-outline"></ion-icon>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/profilee.html">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>Profile management</span>
                    </a>
                </li>
                <li>
                    <a href="/schedule.html">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>Interview scheduling</span>
                    </a>
                </li>
                <li>
                    <a href="instruction.html">
                        <ion-icon name="information-outline"></ion-icon>
                        <span>Instruction</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="videocam-outline"></ion-icon>
                        <span>Communication-video</span>
                    </a>
                </li>
                <li>
                    <a href="contact.html">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                        <span>Request</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="notifications-outline"></ion-icon>
                        <span>Notification</span>
                    </a>
                </li>
                <li>
                    <a href="faq.html">
                        <ion-icon name="help-outline"></ion-icon>
                        <span>Help and support</span>
                    </a>
                </li>
            </ul>
            <a href="home.html" class="logout">
                <ion-icon name="log-out-outline"></ion-icon>
                <span>Log out</span>
            </a>
        </div>
    </aside> -->


    <main class="main-content">
        <header class="topbar">
            <div class="header-wrapper">
                <div class="header-title">
                    <span>Interviewee</span>
                    <h2>information management</h2>
                </div>
            </div>
        </header>

        <section>
<div class="container">
    <h1>FQA</h1>
    <p>were here you can ask the question and will help you</p>

    <div class="search">
        <input type="text" placeholder="search here">
        <button>search</button>
    </div>
</div>

<div class="fqa">
    <div class="fqa-title">
        <h2>How to to check schedule and to perforn interview?</h2>
       
</div>
<div class="fax-box">
<div class="fqa-box">
    <input type="checkbox" class="fqa-trigger" id="fqa-trigger=1">
    <label class="fqa-title" for="fqa-text=1">How do I test my equipment and internet connection before the interview?</label>
    <div class="fqa-detail">
        <p>Provide instructions on how candidates can perform a test run to ensure that their equipment and internet connection are working properly before the interview</p>
    </div>
</div>

<div class="fqa-box">
    <input type="checkbox" class="fqa-trigger" id="fqa-trigger=2">
    <label class="fqa-title" for="fqa-trigger=2">How do I join the online interview at the scheduled time?</label>
    <div class="fqa-detail">
        <p>Provide step-by-step instructions on how candidates can join the online interview at the scheduled time, including any login procedures or meeting IDs/passwords required.</p>
    </div>
</div>

<div class="fqa-box">
    <input type="checkbox" class="fqa-trigger" id="fqa-trigger=3">
    <label class="fqa-title" for="fqa-trigger=">How do I access the online interview platform?</label>
    <div class="fqa-detail">
        <p>Provide instructions on how candidates can log in or access the online interview platform.</p>
    </div>
</div>

<div class="fqa-box">
    <input type="checkbox" class="fqa-trigger" id="fqa-trigger=4">
    <label class="fqa-title" for="fqa-trigger=4">What should I do to prepare my environment for the online interview?</label>
    <div class="fqa-detail">
        <p>Offer tips for creating a professional and distraction-free environment for the online interview, such as choosing a quiet location, minimizing background noise, and ensuring adequate lighting.</p>
    </div>
</div>

<div class="fqa-box">
    <input type="checkbox" class="fqa-trigger" id="fqa-trigger=5">
    <label class="fqa-title" for="fqa-trigger=5">What technology do I need for the online interview?</label>
    <div class="fqa-detail">
        <p>Offer guidance on the required equipment and software for participating in online interviews, such as a computer with a webcam, a stable internet connection, and any specific video conferencing platform.</p>
    </div>
</div>
</div>
</div>
        </section>
    </main>
</body>
</html>