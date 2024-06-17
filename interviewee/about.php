
<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Interview Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* Light blue background */
            color: #333; /* Darker text color for better readability */
        }
        header {
            background-color: #1e90ff; /* DodgerBlue */
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .about-section {
            text-align: center;
            padding: 50px 20px;
            background-color: #e6f7ff; /* Very light blue */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px; /* Added margin bottom for separation */
        }
        .about-section h1 {
            color: #1e90ff;
        }
        .about-section p {
            font-size: 1.2em;
        }
        .team-section {
            margin-top: 30px;
        }
        .team-member {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 20px;
        }
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .team-member h3 {
            color: #1e90ff;
        }
        .team-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        footer {
            background-color: #1e90ff;
            color: white;
            text-align: center;
            padding: 5px 0; /* Decreased padding top and bottom */
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <div class="container">
        <section class="about-section">
            <h1>Who We Are</h1>
            <p>We are a dedicated team committed to streamlining the interview process for both recruiters and candidates. Our system is designed to make interview management seamless, efficient, and effective.</p>
        </section>
        <section class="team-section">
            <h2>Our Team</h2>
            <div class="team-container">
                <div class="team-member">
                    <img src="team1.jpg" alt="Team Member 1">
                    <h3>makindya chacha</h3>
                    <p>CEO</p>
                </div>
                <div class="team-member">
                    <img src="team2.jpg" alt="Team Member 2">
                    <h3>ismaily </h3>
                    <p>CTO</p>
                </div>
                <div class="team-member">
                    <img src="team3.jpg" alt="Team Member 3">
                    <h3>emaa silayo,rose mbele, rehema kavemba</h3>
                    <p>Lead Developer</p>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Interview Management System. All rights reserved.</p>
    </footer>
</body>
</html>