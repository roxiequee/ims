<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Registration number: " . $_POST["RegistrationNumber"] . "<br>";
    echo 'First name: ' . $_POST['Firstname'] . '<br>';
    echo 'Middle name:' . $_POST["Middlename"] . '<br>';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dit2";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO registration (RegistrationNumber, Firstname, Middlename) VALUES ('" . $_POST["RegistrationNumber"] . "', '" . $_POST["Firstname"] . "', '" . $_POST["Middlename"] . "')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
</body>

</html>

</html>