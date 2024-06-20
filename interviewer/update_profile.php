<?php
session_start(); // Start session at the beginning

include 'config.php';

// Check if user is logged in (assuming user_id is set upon login)
if (!isset($_SESSION['user_id'])) {
    // Handle the case where user is not logged in
    // For example, redirect to login page
    header("Location: login.php");
    exit(); // Stop further execution
}

$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   // Escape and sanitize input values
   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   // Update profile information
   $update_profile_query = mysqli_query($conn, "UPDATE `interviewer_table` SET username = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('Query failed');

   // Handle password update
   $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']); // Escape old password input
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'Old password not matched!';
      } elseif($new_pass != $confirm_pass){
         $message[] = 'Confirm password not matched!';
      } else {
         // Update password
         mysqli_query($conn, "UPDATE `interviewer_table` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('Query failed');
         $message[] = 'Password updated successfully!';
      }
   }

   // Handle image update
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'Image is too large';
      } else {
         // Update image
         $image_update_query = mysqli_query($conn, "UPDATE `interviewer_table` SET image = '$update_image' WHERE id = '$user_id'") or die('Query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'Image updated successfully!';
      }
   }

   // Display messages
   if(isset($message)){
      foreach($message as $msg){
         echo '<div class="message">'.$msg.'</div>';
      }
   }

}

// Fetch current user data
$select = mysqli_query($conn, "SELECT * FROM `interviewer_table` WHERE id = '$user_id'") or die('Query failed');
$fetch = mysqli_fetch_assoc($select); // Fetch data

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="mak.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />

</head>
<body>
   
<div class="update-profile">

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if(empty($fetch['image'])){
            echo '<img src="images/default-avatar.png">';
         } else {
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Username:</span>
            <input type="text" name="update_name" value="<?php echo isset($fetch['username']) ? $fetch['username'] : ''; ?>" class="box">
            <span>Your Email:</span>
            <input type="email" name="update_email" value="<?php echo isset($fetch['email']) ? $fetch['email'] : ''; ?>" class="box">
            <span>Update Your Pic:</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo isset($fetch['password']) ? $fetch['password'] : ''; ?>">
            <span>Old Password:</span>
            <input type="password" name="update_pass" placeholder="Enter previous password" class="box">
            <span>New Password:</span>
            <input type="password" name="new_pass" placeholder="Enter new password" class="box">
            <span>Confirm Password:</span>
            <input type="password" name="confirm_pass" placeholder="Confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="Update Profile" name="update_profile" class="btn">
      <a href="update_profile.php" class="delete-btn">Go Back</a>
   </form>

</div>

</body>
</html>