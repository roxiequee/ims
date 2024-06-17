<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bro code</title>
</head>
<body>
    <?php
    $counter = 20;
    $Book = 10;
    $Total = $counter + $Book;
    $session = $counter - $Book;
    $name = $counter * $Book;

    echo "$Total <br>";
    echo "$session<br>";
    echo "$name<br>";
    echo $counter % $Book;
    echo "<br>";
    echo $counter ** $Book;
    echo "<br>";
    echo $counter / $Book;
    echo "<br>";
    echo $Book++;
    echo "<br>";
    echo $counter++;
    echo "<br>";
    echo $counter--;
    echo "<br>";
    echo $Book--;
    echo "<br>";
    echo $counter+=3;
    echo "<br>";
    echo $counter-+4;


    ?>
    
</body>
</html>