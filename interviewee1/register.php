<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $rol = mysqli_real_escape_string($conn, $_POST['role']);

   // Check if passwords match
   if($pass != $cpass){
      $message[] = 'Confirm password not matched!';
   } elseif($image_size > 2000000) {
      $message[] = 'Image size is too large!';
   } else {
      // Check if user exists in any table
      $select_interviewee = mysqli_query($conn, "SELECT * FROM `interviewee_table` WHERE email = '$email'");
      $select_interviewer = mysqli_query($conn, "SELECT * FROM `interviewer_table` WHERE email = '$email'");
      $select_admin = mysqli_query($conn, "SELECT * FROM `admin_table` WHERE email = '$email'");
      
      if(mysqli_num_rows($select_interviewee) > 0 || mysqli_num_rows($select_interviewer) > 0 || mysqli_num_rows($select_admin) > 0) {
         $message[] = 'User already exists';
      } else {
         // Insert user based on role
         if($rol === 'interviewee') {
            $sql = "INSERT INTO `interviewee_table` (username, email, password, image, role) VALUES ('$name', '$email', '$pass', '$image', '$rol')";
         } elseif($rol === 'interviewer') {
            $sql = "INSERT INTO `interviewer_table` (username, email, password, image, role) VALUES ('$name', '$email', '$pass', '$image', '$rol')";
         } elseif($rol === 'admin') {
            $sql = "INSERT INTO `admin_table` (username, email, password, image, role) VALUES ('$name', '$email', '$pass', '$image', '$rol')";
         }

         $insert = mysqli_query($conn, $sql);
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully!';
            header('Location: login.php');
         } else {
            $message[] = 'Registration failed!';
         }
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="mak.css">
</head>
<body>
<div class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
      <h3>Register Now</h3>
      <?php
      if(isset($message)){
         foreach($message as $msg){
            echo '<div class="message">'.$msg.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Enter username" class="box" required>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm password" class="box" required>      
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">  
      <select name="role" id="role" required>
         <option value="interviewee">Interviewee</option>
         <option value="interviewer">Interviewer</option>
         <option value="admin">Admin</option>
      </select>     
      <input type="submit" name="submit" value="Register Now" class="btn">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>
</div>
</body>
</html>