<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Registration number: ".$_POST["RegistrationNumber"]. "<br>";
    echo 'First name: '. $_POST['Firstname']. '<br>';
    echo 'Middle name:' . $_POST["Middlename"]. '<br>';
    
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "dit2";

    $conn = new mysql($servername,$username,$password,$dbname);
    if ($conn->connect_error) {
        die("connection failed: " .$conn->connect_error);
    }

    $sql = "INSERT INTO registration": (RegistrationNumber, Firstname, Middlename)
    VALUES ("ismaily", "MOFATH");

    $RegistrationNumber = $_POST["RegistrationNumber"];
    $Firstname = $_POST["Firstname"];
    $Middlename = $_POST["Middlename"]. "<br>". $conn->error;
    
    
    ?>    
</body>
</html>