<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    
    // Insert data into the database
    $insert_sql = "INSERT INTO interviewee_table (username, password, role, email) VALUES (?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ssss", $username, $password, $role, $email);
    
    if ($insert_stmt->execute()) {
        echo "New candidate added successfully";
    } else {
        echo "Error adding candidate: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:  rgb(4, 4, 144,0.6);
            text-align: center;
            }
         /*form{             
            background-color:grey;
            width:30%;
            margin-left:32%;
            margin-top:4%;
            padding-left:3%; 
            padding-top:3%;
            padding-bottom:3%;
            font-size:150%;
            border-radius:3%;
        }
        input{
            height:50%;
            padding:3%;
        }
        /* form input{
                width:80%;                  */
        /* } */
        /* form input[type="submit"]{
            width:35%;
            margin-left:21%;

                } */
         /* h1{
            text-align:center;
            margin-right:7%;
         }        */ */
    </style>
    <title>Add New Candidate</title>
</head>
<body>
    <h1>ADD NEW INTRVIEWEE</h1>
    <form method="POST" action="add.php" autocomplete="off">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br><br>

        <label for="role">Role:</label><br>
        <input type="text" id="role" name="role" required><br><br><br> 

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Add Candidate">
    </form>
</body>
</html>

<?php
$conn->close();
?>