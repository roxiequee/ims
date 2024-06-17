<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Welcome to our website,<br>";
    echo "First name: " . $_GET['firstname'];
    echo "<br>";
    echo "Middle name: ". $_GET["Middlename"];
    echo "<br>";
    echo "Last name: ". $_GET["Lastname"];
    echo "<br>";
    echo "Gender: " . $_GET["Gender"];
    echo "<br>";
    echo "Age: " . $_GET["Age"];
    echo "<br>";
    echo "Course: ". $_GET["course"];
    echo "<br>";

    ?>
    
</body>
</html>