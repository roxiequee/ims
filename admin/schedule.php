<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interview Scheduling System</title>
<link rel="stylesheet" href="schedule_interview.css">
<style>
     form{
        text-align: center;
        margin-left: 10%;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Interview Scheduling System</h2>
    <center><form action="schedule_interview.php" method="POST">

        <label for="interviewer_number">$interviewer_number</label>
        <input type="text" id="interviewer_number" name="interviewer_number" required>

        <label for="email">email intervieweee</label>
        <input type="email" id="email" name="email" required>

        <label for="candidate_name">Candidate Name:</label>
        <input type="text" id="candidate_name" name="candidate_name" required>
        
        <label for="interview_date">Interview Date:</label>
        <input type="date" id="interview_date" name="interview_date" required>
        
        <label for="interview_time">Interview Time:</label>
        <input type="time" id="interview_time" name="interview_time" required>
        
        <input type="submit" value="Schedule Interview">
    </form></center>
</div>
</body>
</html>