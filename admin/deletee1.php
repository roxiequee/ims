<?php
   
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "login_database";
    
     
    $conn = new mysqli($servername, $username, $password, $database);     
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);    }    

    $sql = "DELETE FROM interviewee_table WHERE id=".$_GET['namba'];
    $result = $conn->query($sql);
    if($conn->query($sql)  === TRUE){
        echo " data entered successfully";
        // echo "<a href='name.html'>going to sign new candidate</a>";
      }
      else{
        echo "error:".$sql."<br>".$conn->error;
    }
    ?>
    