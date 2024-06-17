<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP QN</title>
</head>
<body>
    <?php
    $age = 10;
    $result = ($age < 20);
    echo "Result is". $result;
    echo "<br><br>";
    $x = 10;
    $y = 5;
    $sum = $x + $y;
    echo $x, "+", $y, "=", $sum;
    echo "<br><br>";
    $sub = $x - $y;
    echo $x, "-", "$y", "=", $sub;
    echo "<br><br>";
    $multi = $x * $y;
    echo $x, "*", $y, "=", $multi;
    echo "<br><br>";
    $div = $x / $y;
    echo $x, "/", $y, "=", $div;
    echo "<br><br>";
    $module = $x % $y;
    echo $x, "%", "$y", "=", $module;
    echo "<br><br>";
    $exponential = $x ** $y;
    echo $x, "**", $y, "=", $exponential;

    //SHORTHAND OPERATORS
    $a = 10;
    $b = 12;
    echo "<br><br>";

    // $a = $a + $b;
    //10 + 12;
    echo $a, "+=", "$b", "=", $a += $b;
    echo "<br><br>";
    echo $x, "-=", $y, "=", $x -= $y;
    echo "<br><br>";
    echo $x, "*=", $x, "=", $x *= $y;
    echo "<br><br>";
    echo $x, "*=", $y, "=", $x *= $y;
    echo "<br><br>";
    echo $x, "/=", $y, "=", $x /= $y;
    echo "<br><br>";
    echo $x, "%=", $y, "=", $x %= $y;
    echo "<br><br>";
    
    //PHP ARRAYS
    $names = array("ISMAILY", "MOFATH", "ZEFANIA", "MADARAKA", "KASENGA");
    echo $names[0],"<br>";
    echo $names[1], "<br>";
    echo $names[2], "<br>";
    echo $names[3], "<br>";
    echo $names[4], "<br>";
    echo "<br>";
    
    $team = array("ISMAILY" => "YANGA", "MOFATH" => "SIMBA", "ZEFANIA" => "BARCELONA", "MADARAKA" => "LIVERPOL", "KASENGA" => "AZAM");
    echo $team["ISMAILY"],"<br>";
    echo $team["MOFATH"], "<br>";
    echo $team["ZEFANIA"], "<br>";
    echo $team["MADARAKA"], "<br>";
    echo $team["KASENGA"], "<br>";
    echo "<br>";

    $regions = array(
        array("Dar", "Ilala", "Ubungo", "Temeke", 180),
        array("Iringa", "Kisiani", "Mufindi", "Kilolo", 150),
        array("Mwanza", "ilemela", "magu", "nyamagana", 100),
    );
    echo $regions[2][4],"<br>";

    ?>
</body>
</html>