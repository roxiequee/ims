<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $rol = mysqli_real_escape_string($conn, $_POST['role']);

    $query = "
        SELECT * FROM (
            SELECT * FROM `interviewee_table` WHERE email = '$email' AND password = '$pass' AND role = '$rol'
            UNION ALL
            SELECT * FROM `interviewer_table` WHERE email = '$email' AND password = '$pass' AND role = '$rol'
            UNION ALL
            SELECT * FROM `admin_table` WHERE email = '$email' AND password = '$pass' AND role = '$rol'
        ) AS combined_table
    ";

    $select = mysqli_query($conn, $query);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user'] = $row['email'];
        $_SESSION['use'] = $row['username'];
        $_SESSION['us'] = $row['interviewer_number'];


        $role = $row['role'];

        if ($role === 'interviewee') {
            // set session
            $_SESSION['interviewer_id'] = $row['id'];
            $_SESSION['interviewer_email'] = $row['interviewer_number'];
            header("Location: interviewee/");
            exit();
        } elseif ($role === "admin") {
            // set session
            $_SESSION['interviewer_id'] = $row['id'];
            $_SESSION['interviewer_email'] = $row['interviewer_number'];
            header("Location: admin/index.php");
            exit();
        } elseif ($role === "interviewer") {
            // set session
            $_SESSION['interviewer_id'] = $row['id'];
            $_SESSION['interviewer_email'] = $row['interviewer_number'];
            header("Location: interviewer/index.php");
            exit();
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="mak.css">
</head>

<body>

    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Login Now</h3>
            <?php
            if (isset($message)) {
                foreach ($message as $msg) {
                    echo '<div class="message">' . $msg . '</div>';
                }
            }
            ?>
            <input type="email" name="email" placeholder="Enter Email" class="box" required>
            <input type="password" name="password" placeholder="Enter Password" class="box" required>
            <select name="role" id="role" required>
                <option value="interviewee">Interviewee</option>
                <option value="interviewer">Interviewer</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Login Now" class="btn">
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
        </form>
    </div>

</body>

</html>