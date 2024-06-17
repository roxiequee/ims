<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php content</title>
</head>
<body>
    <?php
    for($x = "0"; $x <=10; $x++) {
        echo " $x. Sumaah is going to school";
        echo "<br>";
    }

    $x = 2;
    while($x <=5) {
        echo "The number is:$x <br>";
        $x++;
    }
    echo "<br>";
    //PHP WHILE OPERATORS
    //ARRAY AND WHILE OPERATOR

    $Friends = Array("ISMAILY", "MOFATH", "ZEFANIA", "DANIEL", "MADARAKA");
    $i = 1;    
    while($i <= 5 ) {
        echo "Friend $i:", $Friends[$i - 1], "<br>";
        $i++;
    }
    echo "<br>";

    do {
        echo "Friend $i:", $Friends[$i - 1], "<br>";
        $i++;
    }

    while($i <= 5);

    $Regions = Array("KILIMANJARO" => "MOSHI", "MARA" => "MUSOMA", "RUVUMA" => "SONGEA", "PWANI" => "KIBAHA", "KAGERA" => "BUKOBA");
    foreach($Regions as $h=>$t) {
        echo "$h: $t <br>";
    }
    


?>
    
</body>
</html>