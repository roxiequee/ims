
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login_database";


    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id,username,password,role,email FROM interviewer_table";
    $result = $conn->query($sql);



    echo "
          <style>
             table{
                text-align:center;
                width:100%;
            }
          </style>

    <table border = 1 align='center' bgcolor='yellow' text>
         <tr>
         <th>id</th>
         <th> firstname</th>
         <th>middle name</th>
         <th> last name</th>
               <th>age</th>
         <th>action</th>
         <th>update</th>
         </tr>";
         echo '<a href="add1.php">add new candidate</a>';

    if ($result->num_rows > 0){

        while($row = $result->fetch_assoc()){

            echo "<tr>
           <td>".$row['id']."</td>
           <td>".$row['username']."</td>
            <td>".$row['password']."</td>
            <td>".$row['email']."</td>
            <td>".$row['role']."</td>  ";
            echo '<td> <a href = "deletee.php?namba='.$row['id'].'">delete</a></td>';
            echo '<td> <a href = "edit1.php?namba='.$row['id'].'">update</a></td>';

           echo "</tr>";
        }
    }
else {
       echo "<tr>
       <td colspan = 6>o result</td>
       </tr>";

}

echo "</table>";
?>
